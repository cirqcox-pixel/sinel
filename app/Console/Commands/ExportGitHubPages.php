<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class ExportGitHubPages extends Command
{
    protected $signature = 'pages:export
                            {--output=docs : Directory to write the static site into}
                            {--base-url=https://cirqcox-pixel.github.io/sinel : Public GitHub Pages URL}';

    protected $description = 'Export the public marketing site as static HTML for GitHub Pages';

    public function handle(Kernel $kernel): int
    {
        $output = base_path($this->option('output'));
        $baseUrl = rtrim((string) $this->option('base-url'), '/');

        config([
            'app.static_export' => true,
            'app.url' => $baseUrl,
            'session.driver' => 'array',
            'cache.default' => 'array',
            'queue.default' => 'sync',
            'filesystems.disks.public.url' => $baseUrl.'/storage',
        ]);

        URL::forceRootUrl($baseUrl);
        URL::forceScheme('https');

        $cname = $output.DIRECTORY_SEPARATOR.'CNAME';
        $cnameContents = is_file($cname) ? File::get($cname) : null;

        File::deleteDirectory($output);
        File::ensureDirectoryExists($output);

        if ($cnameContents) {
            File::put($cname, $cnameContents);
        }

        $paths = ['/', '/academy', '/projects', '/login', '/admin/login'];

        foreach (Project::query()->published()->ordered()->get() as $project) {
            $paths[] = '/projects/'.$project->slug;
        }

        foreach ($paths as $path) {
            $request = Request::create($path, 'GET');
            $response = $kernel->handle($request);

            if ($response->getStatusCode() >= 400) {
                $this->error("Failed {$path} ({$response->getStatusCode()})");
                $kernel->terminate($request, $response);

                return self::FAILURE;
            }

            $html = $this->withDirectoryUrls($response->getContent() ?: '', $baseUrl);
            $this->writePage($output, $path, $html);
            $kernel->terminate($request, $response);
            $this->line("Wrote {$path}");
        }

        $this->copyPublicAssets($output);
        File::put($output.DIRECTORY_SEPARATOR.'.nojekyll', '');
        File::copy($output.DIRECTORY_SEPARATOR.'index.html', $output.DIRECTORY_SEPARATOR.'404.html');
        $this->injectMissingRouteRedirects($output.DIRECTORY_SEPARATOR.'404.html');

        $this->info("Static site exported to {$output}");
        $this->info("GitHub Pages URL: {$baseUrl}/");

        return self::SUCCESS;
    }

    protected function writePage(string $output, string $path, string $html): void
    {
        $relative = trim($path, '/');
        $file = $relative === ''
            ? $output.DIRECTORY_SEPARATOR.'index.html'
            : $output.DIRECTORY_SEPARATOR.str_replace('/', DIRECTORY_SEPARATOR, $relative).DIRECTORY_SEPARATOR.'index.html';

        File::ensureDirectoryExists(dirname($file));
        File::put($file, $html);
    }

    protected function copyPublicAssets(string $output): void
    {
        $copies = [
            public_path('css') => $output.DIRECTORY_SEPARATOR.'css',
            public_path('js') => $output.DIRECTORY_SEPARATOR.'js',
            public_path('images') => $output.DIRECTORY_SEPARATOR.'images',
        ];

        foreach ($copies as $from => $to) {
            if (is_dir($from)) {
                File::copyDirectory($from, $to);
            }
        }

        foreach (['sinel_logo.png', 'favicon.ico', 'robots.txt'] as $file) {
            $from = public_path($file);
            if (is_file($from)) {
                File::copy($from, $output.DIRECTORY_SEPARATOR.$file);
            }
        }

        $storage = storage_path('app/public');
        if (is_dir($storage)) {
            File::copyDirectory($storage, $output.DIRECTORY_SEPARATOR.'storage');
        }
    }

    protected function withDirectoryUrls(string $html, string $base): string
    {
        return preg_replace_callback(
            '~([\'"])('.preg_quote($base, '~').'(?:/[^\'"?#]*)?)(\?[^\'"#]*)?(#[^\'"]*)?\1~',
            function (array $match): string {
                $urlPath = $match[2];
                $query = $match[3] ?? '';
                $hash = $match[4] ?? '';
                $path = parse_url($urlPath, PHP_URL_PATH) ?? '/';

                if (pathinfo($path, PATHINFO_EXTENSION) === '' && ! str_ends_with($urlPath, '/')) {
                    $urlPath .= '/';
                }

                return $match[1].$urlPath.$query.$hash.$match[1];
            },
            $html
        ) ?? $html;
    }

    protected function injectMissingRouteRedirects(string $fourOhFour): void
    {
        if (! is_file($fourOhFour)) {
            return;
        }

        $script = <<<'HTML'
<script>
(function () {
  var path = window.location.pathname.replace(/\/+$/, '') || '/';
  var dest = { '/admin/login': '/admin/login/', '/login': '/login/' }[path];
  if (dest) {
    window.location.replace(dest + window.location.search + window.location.hash);
  }
})();
</script>
HTML;

        $html = File::get($fourOhFour);
        File::put($fourOhFour, preg_replace('/<head>/i', '<head>'."\n".$script, $html, 1) ?? $html);
    }
}

@php
    $seoTitle = trim($__env->yieldContent('title')) ?: 'Sinel Hospitality — Hotel & Resort Management in East Africa';
    $seoDescription = trim($__env->yieldContent('meta_description')) ?: 'Sinel Hospitality designs, opens and manages hotels, resorts and restaurants across East Africa.';
    $seoKeywords = trim($__env->yieldContent('meta_keywords')) ?: 'Sinel Hospitality, hotel management Uganda, hospitality consultancy East Africa, turnkey hotel projects, Masheda Palms Resort, Karibu, Serena Hotel Kigo, Alure Hotel and Suites, Hotel Bia-Exauce Congo, Jikoni Restaurant Kampala, Villa Bellator, Wilsen Hotel, Robyson Residency Kinshasa';
    $path = '/'.ltrim(request()->path(), '/');
    if ($path === '/.') {
        $path = '/';
    }
    $canonical = rtrim(config('app.url', 'https://sinelhospitality.site'), '/');
    if ($path === '/' || $path === '') {
        $canonical .= '/';
    } else {
        $canonical .= rtrim($path, '/').'/';
    }
    $ogImage = asset('sinel_logo.png');
    $indexable = ! request()->is('admin/login') && ! request()->is('login') && ! request()->is('register');
@endphp

<link rel="canonical" href="{{ $canonical }}">
<meta name="robots" content="{{ $indexable ? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' : 'noindex, nofollow' }}">
<meta name="googlebot" content="{{ $indexable ? 'index, follow' : 'noindex, nofollow' }}">
<meta name="bingbot" content="{{ $indexable ? 'index, follow' : 'noindex, nofollow' }}">
<meta name="keywords" content="{{ $seoKeywords }}">
<meta name="author" content="Sinel Hospitality">
<meta name="geo.region" content="UG">
<meta name="geo.placename" content="Kampala">
<meta name="language" content="en">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Sinel Hospitality">
<meta property="og:locale" content="en_US">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<link rel="sitemap" type="application/xml" href="https://sinelhospitality.site/sitemap.xml">

@if ($indexable)
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'ProfessionalService',
            '@id' => 'https://sinelhospitality.site/#organization',
            'name' => 'Sinel Hospitality',
            'url' => 'https://sinelhospitality.site/',
            'logo' => asset('sinel_logo.png'),
            'image' => asset('sinel_logo.png'),
            'description' => 'Hospitality solutions company specialising in turnkey hotel projects and professional management across East Africa.',
            'foundingDate' => '2022',
            'areaServed' => ['Uganda', 'Democratic Republic of the Congo', 'East Africa', 'Middle East'],
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Kampala',
                'addressCountry' => 'UG',
            ],
            'sameAs' => [
                'https://facebook.com/SinelHospitality',
                'https://twitter.com/SINELTALITY',
                'https://instagram.com/sinel_hospitality',
            ],
            'knowsAbout' => [
                'Hotel management',
                'Turnkey hospitality projects',
                'Restaurant management',
                'Masheda Palms Resort',
                'Karibu',
                'Serena Hotel Kigo',
                'Alure Hotel and Suites',
                'Hotel Bia-Exauce',
                'Jikoni Restaurant',
                'Villa Bellator',
                'Wilsen Hotel',
                'Robyson Residency Kinshasa',
            ],
        ],
        [
            '@type' => 'ItemList',
            'name' => 'Hotels, resorts and restaurants Sinel Hospitality has worked with',
            'itemListElement' => collect([
                ['Karibu', 'https://sinelhospitality.site/projects/karibu/'],
                ['Serena Hotel Kigo', 'https://sinelhospitality.site/projects/serena-hotel-kigo/'],
                ['Masheda Palms Resort', 'https://sinelhospitality.site/projects/masheda/'],
                ['Alure Hotel and Suites', 'https://sinelhospitality.site/projects/alure-hotel-and-suites/'],
                ['Hotel Bia-Exauce', 'https://sinelhospitality.site/projects/biaexauce/'],
                ['Jikoni Restaurant', 'https://sinelhospitality.site/projects/jikoni/'],
                ['Villa Bellator', 'https://sinelhospitality.site/projects/villa-bellator/'],
                ['Wilsen Hotel', 'https://sinelhospitality.site/projects/wilsen-hotel/'],
                ['Robyson Residency Kinshasa', 'https://sinelhospitality.site/projects/robyson-residency-kinshasa/'],
            ])->values()->map(fn ($item, $i) => [
                '@type' => 'ListItem',
                'position' => $i + 1,
                'name' => $item[0],
                'url' => $item[1],
            ])->all(),
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif

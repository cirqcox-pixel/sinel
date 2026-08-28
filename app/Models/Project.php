<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'location',
        'description',
        'cover_image',
        'video_url',
        'color_from',
        'color_to',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];

    // Fallback gradient used only until a real cover image is uploaded —
    // not exposed in the admin form anymore, just a safety net.
    protected $attributes = [
        'color_from' => '#4D69B1',
        'color_to' => '#1E2947',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function booted(): void
    {
        static::creating(function (Project $project) {
            if (empty($project->slug)) {
                $project->slug = static::uniqueSlugFor($project->title);
            }
        });

        static::updating(function (Project $project) {
            if ($project->isDirty('title') && ! $project->isDirty('slug')) {
                $project->slug = static::uniqueSlugFor($project->title, $project->id);
            }
        });
    }

    protected static function uniqueSlugFor(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title) ?: 'project';
        $slug = $base;
        $i = 1;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$base}-" . ++$i;
        }

        return $slug;
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    /**
     * Public URL for the cover image, or null if none is available
     * (views fall back to a gradient in that case).
     *
     * Prefers a committed file under public/images/projects/{slug}.* so
     * GitHub Pages can serve photos without Laravel storage. Falls back
     * to the uploaded storage path (requires `php artisan storage:link`).
     */
    public function getCoverImageUrlAttribute(): ?string
    {
        foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
            $relative = 'images/projects/'.$this->slug.'.'.$ext;
            if (is_file(public_path($relative))) {
                return asset($relative);
            }
        }

        return $this->cover_image
            ? Storage::disk('public')->url($this->cover_image)
            : null;
    }

    public function hasVideo(): bool
    {
        return filled($this->video_url);
    }

    /**
     * Turns a YouTube/Vimeo watch link into an embeddable iframe URL.
     * If the URL doesn't match either pattern, it's assumed to be a
     * direct video file (mp4/webm) and used as-is with a <video> tag.
     */
    public function getEmbedVideoUrlAttribute(): ?string
    {
        $url = $this->video_url;

        if (! $url) {
            return null;
        }

        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $m) ||
            preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $url, $m) ||
            preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', $url, $m)) {
            return 'https://www.youtube.com/embed/' . $m[1];
        }

        if (preg_match('/vimeo\.com\/(\d+)/', $url, $m)) {
            return 'https://player.vimeo.com/video/' . $m[1];
        }

        return null; // signals "not an embeddable link" — treat as a direct file instead
    }

    public function isDirectVideoFile(): bool
    {
        return $this->hasVideo() && $this->embed_video_url === null;
    }
}
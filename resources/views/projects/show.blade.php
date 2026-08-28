@extends('layouts.app')

@section('title', $project->title . ' — Sinel Hospitality')
@section('meta_description', $project->description ?? ($project->title . ' — a project managed by Sinel Hospitality.'))

@section('content')

<section class="relative overflow-hidden">
    <div class="aspect-[16/9] sm:aspect-[21/9] relative"
         @unless($project->cover_image_url) style="background: linear-gradient(160deg, {{ $project->color_from }}, {{ $project->color_to }});" @endunless>
        @if ($project->cover_image_url)
            <img src="{{ $project->cover_image_url }}" alt="{{ $project->title }}" class="absolute inset-0 w-full h-full object-cover">
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-ink/70 via-ink/20 to-transparent"></div>
        <div class="absolute inset-0 max-w-[1400px] mx-auto px-5 md:px-8 flex flex-col justify-end pb-10 sm:pb-14">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-sm text-white/70 hover:text-coral transition-colors mb-6 w-fit">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                All projects
            </a>
            <span class="font-mono text-[10px] uppercase tracking-[0.15em] text-coral bg-ink/30 backdrop-blur px-2.5 py-1 rounded-full w-fit mb-4">
                {{ $project->category }}
            </span>
            <h1 class="font-display text-3xl sm:text-5xl font-semibold text-white tracking-tight leading-[1.1]">{{ $project->title }}</h1>
            <p class="text-white/70 mt-2">{{ $project->location }}</p>
        </div>
    </div>
</section>

<section class="py-16 sm:py-20 md:py-24 border-b border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8 grid lg:grid-cols-[1fr_0.6fr] gap-14">
        <div class="reveal">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">About This Project</p>
            <p class="text-lg text-ink/70 leading-relaxed">
                {{ $project->description ?: 'A project managed by Sinel Hospitality. Full case study details coming soon.' }}
            </p>
            <a href="#contact" class="mt-8 inline-flex items-center gap-2 bg-emerald hover:bg-emerald-light text-sage font-semibold px-6 py-3.5 rounded-full transition-colors">
                Discuss a Similar Project
            </a>
        </div>

        <div class="reveal bg-card border border-line rounded-3xl p-7 h-fit">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-ink/40 mb-5">Project Details</p>
            <dl class="space-y-4 text-sm">
                <div class="flex justify-between gap-4">
                    <dt class="text-ink/50">Category</dt>
                    <dd class="text-ink font-medium text-right">{{ $project->category }}</dd>
                </div>
                <div class="flex justify-between gap-4">
                    <dt class="text-ink/50">Location</dt>
                    <dd class="text-ink font-medium text-right">{{ $project->location }}</dd>
                </div>
            </dl>
        </div>
    </div>
</section>

@if ($project->hasVideo())
    <section class="py-16 sm:py-20 md:py-24 border-b border-line bg-sage">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-6">Featured Video</p>
            <div class="aspect-video rounded-3xl overflow-hidden bg-ink">
                @if ($project->embed_video_url)
                    <iframe
                        src="{{ $project->embed_video_url }}"
                        class="w-full h-full"
                        title="{{ $project->title }} video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                @else
                    <video controls class="w-full h-full" preload="metadata">
                        <source src="{{ $project->video_url }}">
                        Your browser doesn't support embedded video. <a href="{{ $project->video_url }}" class="text-coral">Watch it directly</a>.
                    </video>
                @endif
            </div>
        </div>
    </section>
@endif

@if ($related->isNotEmpty())
    <section class="py-16 sm:py-20 md:py-24">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-8">More Projects</p>
            <div class="grid sm:grid-cols-3 gap-6">
                @foreach ($related as $item)
                    <a href="{{ route('projects.show', $item) }}"
                       class="group relative aspect-[4/5] rounded-xl overflow-hidden"
                       @unless($item->cover_image_url) style="background: linear-gradient(160deg, {{ $item->color_from }}, {{ $item->color_to }});" @endunless>
                        @if ($item->cover_image_url)
                            <img src="{{ $item->cover_image_url }}" alt="{{ $item->title }}" class="absolute inset-0 w-full h-full object-cover">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-ink/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-5">
                            <p class="font-display text-lg font-semibold text-white leading-tight">{{ $item->title }}</p>
                            <p class="text-xs text-white/70 mt-1">{{ $item->location }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif
@endsection
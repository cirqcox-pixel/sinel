@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl font-semibold text-ink">Welcome back, {{ explode(' ', auth()->user()->name)[0] }}.</h1>
        <p class="text-sm text-ink/50 mt-1">Here's what's happening on the site.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-10">
        <div class="bg-card border border-line rounded-3xl p-6">
            <p class="text-xs font-mono uppercase tracking-wide text-ink/40">Projects</p>
            <p class="mt-2 font-display text-3xl font-semibold text-ink">{{ $stats['projects_total'] }}</p>
            <p class="text-xs text-ink/40 mt-1">{{ $stats['projects_published'] }} published</p>
        </div>
        <div class="bg-card border border-line rounded-3xl p-6">
            <p class="text-xs font-mono uppercase tracking-wide text-ink/40">Students</p>
            <p class="mt-2 font-display text-3xl font-semibold text-ink">{{ $stats['students_total'] }}</p>
            <p class="text-xs text-ink/40 mt-1">registered accounts</p>
        </div>
        <div class="bg-card border border-line rounded-3xl p-6">
            <p class="text-xs font-mono uppercase tracking-wide text-ink/40">Admins</p>
            <p class="mt-2 font-display text-3xl font-semibold text-ink">{{ $stats['admins_total'] }}</p>
            <p class="text-xs text-ink/40 mt-1">staff accounts</p>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="bg-emerald hover:bg-emerald-light transition-colors rounded-3xl p-6 flex flex-col justify-between text-white">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
            <p class="mt-4 font-semibold text-sm">Add a Project</p>
        </a>
    </div>

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="bg-card border border-line rounded-3xl overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b border-line">
                <p class="font-semibold text-ink text-sm">Recent Projects</p>
                <a href="{{ route('admin.projects.index') }}" class="text-xs font-semibold text-emerald">View all</a>
            </div>
            @forelse ($recentProjects as $project)
                <div class="flex items-center gap-3 px-6 py-3.5 border-b border-line last:border-0">
                    @if ($project->cover_image_url)
                        <img src="{{ $project->cover_image_url }}" alt="" class="w-8 h-8 rounded-lg object-cover shrink-0">
                    @else
                        <span class="w-8 h-8 rounded-lg bg-sage border border-line shrink-0"></span>
                    @endif
                    <div class="min-w-0">
                        <p class="text-sm font-medium text-ink truncate">{{ $project->title }}</p>
                        <p class="text-xs text-ink/40">{{ $project->location }}</p>
                    </div>
                </div>
            @empty
                <p class="px-6 py-6 text-sm text-ink/40">No projects yet.</p>
            @endforelse
        </div>

        <div class="bg-card border border-line rounded-3xl overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b border-line">
                <p class="font-semibold text-ink text-sm">Recent Students</p>
            </div>
            @forelse ($recentStudents as $student)
                <div class="flex items-center gap-3 px-6 py-3.5 border-b border-line last:border-0">
                    <span class="w-8 h-8 rounded-full bg-emerald/10 text-emerald flex items-center justify-center text-xs font-semibold shrink-0">
                        {{ strtoupper(substr($student->name, 0, 1)) }}
                    </span>
                    <div class="min-w-0">
                        <p class="text-sm font-medium text-ink truncate">{{ $student->name }}</p>
                        <p class="text-xs text-ink/40 truncate">{{ $student->email }}</p>
                    </div>
                </div>
            @empty
                <p class="px-6 py-6 text-sm text-ink/40">No students registered yet.</p>
            @endforelse
        </div>
    </div>
@endsection
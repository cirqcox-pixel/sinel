<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — Sinel Hospitality</title>
    <link rel="icon" href="{{ asset('sinel_logo.png') }}" sizes="any">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#15161A',
                        emerald: { DEFAULT: '#4D69B1', light: '#8599CA', deep: '#1E2947' },
                        coral: { DEFAULT: '#637FC4', dark: '#405EAA' },
                        sage: '#F5F5F7',
                        card: '#FFFFFF',
                        line: '#E3E3E7',
                    },
                    fontFamily: {
                        body: ['Inter', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                },
            },
        };
    </script>
</head>
<body class="antialiased bg-sage text-ink font-body">
<div class="min-h-screen flex">

    {{-- Sidebar --}}
    <aside class="w-64 shrink-0 bg-emerald-deep text-sage hidden md:flex flex-col">
        <div class="px-6 py-6 border-b border-sage/10">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                <span class="w-9 h-9 rounded-full bg-sage/10 border border-sage/20 flex items-center justify-center font-semibold">S</span>
                <span class="font-semibold">Sinel Admin</span>
            </a>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-1">
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-sage/10 text-white' : 'text-sage/60 hover:text-sage hover:bg-sage/5' }} transition-colors">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l2-2m0 0 7-7 7 7M5 10v10a1 1 0 0 0 1 1h3m10-11 2 2m-2-2v10a1 1 0 0 1-1 1h-3m-6 0a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1m-6 0h6"/></svg>
                Dashboard
            </a>
            <a href="{{ route('admin.projects.index') }}"
               class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium {{ request()->routeIs('admin.projects.*') ? 'bg-sage/10 text-white' : 'text-sage/60 hover:text-sage hover:bg-sage/5' }} transition-colors">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                Projects
            </a>
            <a href="{{ route('profile.edit') }}"
               class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium {{ request()->routeIs('profile.edit') ? 'bg-sage/10 text-white' : 'text-sage/60 hover:text-sage hover:bg-sage/5' }} transition-colors">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                Profile
            </a>
        </nav>
        <div class="px-4 py-6 border-t border-sage/10 space-y-1">
            <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-sage/60 hover:text-sage hover:bg-sage/5 transition-colors">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z"/></svg>
                View Site
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-sage/60 hover:text-coral hover:bg-sage/5 transition-colors">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                    Log Out
                </button>
            </form>
        </div>
    </aside>

    {{-- Content --}}
    <div class="flex-1 min-w-0">
        <header class="md:hidden flex items-center justify-between px-5 py-4 bg-emerald-deep text-sage">
            <span class="font-semibold">Sinel Admin</span>
            <a href="{{ route('home') }}" class="text-sm text-sage/60">View Site</a>
        </header>

        <main class="px-5 md:px-10 py-8 md:py-10">
            @if (session('status'))
                <div class="mb-6 rounded-2xl border border-emerald/20 bg-emerald/5 text-emerald px-5 py-3.5 text-sm font-medium">
                    {{ session('status') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
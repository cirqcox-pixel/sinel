<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sinel Hospitality — The Best Hospitality Company in Africa')</title>
    <meta name="description" content="@yield('meta_description', 'Sinel Hospitality is a hospitality consultancy firm delivering hotel & resort management, restaurant management, event planning and personalized itineraries across Africa.')">

    <link rel="icon" href="{{ asset('sinel_logo.png') }}" sizes="any">

    {{-- Fonts: Fraunces (display), Inter (body), IBM Plex Mono (utility) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500;1,9..144,600&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

    {{--
        Tailwind via CDN — no Node/Vite build step required, works on plain
        cPanel/shared hosting. If you later move to a proper asset build
        (npm + Vite/Mix), swap this block for @vite(...) and reuse the same
        tailwind.config.js tokens shipped alongside this layout.

        Color tokens are named generically (emerald/coral/sage) so template
        markup never has to change — only the hex values below do. Current
        values are the real Sinel Hospitality brand colors: brand blue,
        near-black, and an off-white/light-gray background, taken from the
        2022 Company Profile.
    --}}
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
                        display: ['Fraunces', 'serif'],
                        body: ['Inter', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                },
            },
        };
    </script>

    {{-- Custom component styles (ticker, nav underline, mobile menu, focus states) --}}
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    @stack('head')
</head>
<body class="antialiased bg-sage text-ink font-body">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- Mobile menu toggle --}}
    <script src="{{ asset('js/site.js') }}" defer></script>

    @stack('scripts')
</body>
</html>
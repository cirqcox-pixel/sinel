<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sinel Hospitality — The Best Hospitality Company in Africa')</title>
    <meta name="description" content="@yield('meta_description', 'Sinel Hospitality is a hospitality consultancy firm delivering hotel & resort management, restaurant management, event planning and personalized itineraries across Africa.')">

    <link rel="icon" href="{{ asset('sinel_logo.png') }}" sizes="any">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#2A241E',
                        emerald: { DEFAULT: '#3D5A80', light: '#6B86A8', deep: '#1E2947' },
                        coral: { DEFAULT: '#C4A574', dark: '#A88858' },
                        sage: '#F4EFE6',
                        card: '#FFFBF5',
                        line: '#E5D9C8',
                    },
                    fontFamily: {
                        display: ['"Cormorant Garamond"', 'Georgia', 'serif'],
                        body: ['Outfit', 'sans-serif'],
                        mono: ['Outfit', 'sans-serif'],
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
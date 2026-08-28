<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sign In') — Sinel Hospitality</title>
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
</head>
<body class="antialiased bg-sage text-ink font-body min-h-screen">

<div class="min-h-screen grid lg:grid-cols-2">

    {{-- Brand panel --}}
    <div class="hidden lg:flex flex-col justify-between bg-emerald-deep text-sage p-12 relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1400&q=80" alt="" class="absolute inset-0 w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-deep via-emerald-deep/70 to-emerald-deep/40"></div>
        <div class="relative">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <span class="w-10 h-10 rounded-full bg-sage/10 border border-sage/20 flex items-center justify-center font-display font-semibold">S</span>
                <span class="font-display text-lg font-semibold">Sinel Hospitality</span>
            </a>
        </div>
        <div class="relative max-w-md">
            <p class="font-display text-3xl italic leading-snug">
                &ldquo;To be perceived and acknowledged as the best hospitality company in Africa.&rdquo;
            </p>
            <p class="mt-4 text-sm text-sage/50 font-mono uppercase tracking-wide">Our Vision</p>
        </div>
        <div class="relative text-xs text-sage/40 font-mono">&copy; {{ date('Y') }} Sinel Hospitality</div>
    </div>

    {{-- Form panel --}}
    <div class="flex items-center justify-center p-6 sm:p-10">
        <div class="w-full max-w-sm">
            <a href="{{ route('home') }}" class="lg:hidden flex items-center gap-3 mb-10">
                <span class="w-10 h-10 rounded-full bg-emerald flex items-center justify-center font-display text-sage font-semibold">S</span>
                <span class="font-display text-lg font-semibold text-ink">Sinel Hospitality</span>
            </a>

            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
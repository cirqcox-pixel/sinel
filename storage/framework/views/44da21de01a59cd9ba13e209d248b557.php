<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Sign In'); ?> — Sinel Hospitality</title>
    <link rel="icon" href="<?php echo e(asset('sinel_logo.png')); ?>" sizes="any">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,500;0,9..144,600;1,9..144,500&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
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
</head>
<body class="antialiased bg-sage text-ink font-body min-h-screen">

<div class="min-h-screen grid lg:grid-cols-2">

    
    <div class="hidden lg:flex flex-col justify-between bg-emerald-deep text-sage p-12 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald via-emerald-deep to-ink/80"></div>
        <div class="relative">
            <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-3">
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
        <div class="relative text-xs text-sage/40 font-mono">&copy; <?php echo e(date('Y')); ?> Sinel Hospitality</div>
    </div>

    
    <div class="flex items-center justify-center p-6 sm:p-10">
        <div class="w-full max-w-sm">
            <a href="<?php echo e(route('home')); ?>" class="lg:hidden flex items-center gap-3 mb-10">
                <span class="w-10 h-10 rounded-full bg-emerald flex items-center justify-center font-display text-sage font-semibold">S</span>
                <span class="font-display text-lg font-semibold text-ink">Sinel Hospitality</span>
            </a>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/layouts/auth.blade.php ENDPATH**/ ?>
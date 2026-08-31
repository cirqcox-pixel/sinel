<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'My Account'); ?> — Sinel Hospitality</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,500;0,9..144,600&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
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

<header class="bg-white border-b border-line">
    <div class="max-w-5xl mx-auto px-5 sm:px-8 h-16 flex items-center justify-between">
        <a href="<?php echo e(route('student.dashboard')); ?>" class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-full bg-emerald flex items-center justify-center font-display text-sage text-sm font-semibold">S</span>
            <span class="font-display font-semibold text-ink hidden sm:inline">Sinel Academy</span>
        </a>
        <nav class="flex items-center gap-2 sm:gap-4 text-sm font-medium">
            <a href="<?php echo e(route('student.dashboard')); ?>"
               class="px-3 py-2 rounded-full <?php echo e(request()->routeIs('student.dashboard') ? 'bg-emerald/10 text-emerald' : 'text-ink/60 hover:text-ink'); ?> transition-colors">
                Dashboard
            </a>
            <a href="<?php echo e(route('profile.edit')); ?>"
               class="px-3 py-2 rounded-full <?php echo e(request()->routeIs('profile.edit') ? 'bg-emerald/10 text-emerald' : 'text-ink/60 hover:text-ink'); ?> transition-colors">
                Profile
            </a>
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="px-3 py-2 rounded-full text-ink/60 hover:text-coral transition-colors">Log Out</button>
            </form>
        </nav>
    </div>
</header>

<main class="max-w-5xl mx-auto px-5 sm:px-8 py-10">
    <?php if(session('status')): ?>
        <div class="mb-6 rounded-2xl border border-emerald/20 bg-emerald/5 text-emerald px-5 py-3.5 text-sm font-medium">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
</main>
</body>
</html><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/layouts/student.blade.php ENDPATH**/ ?>
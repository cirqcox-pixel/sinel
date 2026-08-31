<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Sinel Hospitality — The Best Hospitality Company in Africa'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Sinel Hospitality is a hospitality consultancy firm delivering hotel & resort management, restaurant management, event planning and personalized itineraries across Africa.'); ?>">

    <link rel="icon" href="<?php echo e(asset('sinel_logo.png')); ?>" sizes="any">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500;1,9..144,600&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

    
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

    
    <link rel="stylesheet" href="<?php echo e(asset('css/site.css')); ?>">

    <?php echo $__env->yieldPushContent('head'); ?>
</head>
<body class="antialiased bg-sage text-ink font-body">

    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <script src="<?php echo e(asset('js/site.js')); ?>" defer></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/layouts/app.blade.php ENDPATH**/ ?>
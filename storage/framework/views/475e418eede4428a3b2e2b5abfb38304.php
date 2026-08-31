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
</html><?php /**PATH D:\My Apps\sinel_web\sinel_web\resources\views/layouts/app.blade.php ENDPATH**/ ?>
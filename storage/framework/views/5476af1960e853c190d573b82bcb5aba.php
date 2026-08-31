

<?php $__env->startSection('title', ucfirst($portal) . ' Login'); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $activePortal = old('portal', session('portal', $portal));
    ?>

    
    <div class="flex items-center gap-1 bg-line/50 rounded-full p-1 mb-8 w-fit">
        <a href="<?php echo e(route('login.student')); ?>"
           class="px-4 py-2 rounded-full text-sm font-semibold transition-colors <?php echo e($activePortal === 'student' ? 'bg-white text-ink shadow-sm' : 'text-ink/50 hover:text-ink'); ?>">
            Student
        </a>
        <a href="<?php echo e(route('login.admin')); ?>"
           class="px-4 py-2 rounded-full text-sm font-semibold transition-colors <?php echo e($activePortal === 'admin' ? 'bg-white text-ink shadow-sm' : 'text-ink/50 hover:text-ink'); ?>">
            Admin / Staff
        </a>
    </div>

    <h1 class="font-display text-3xl font-semibold text-ink tracking-tight mb-2">
        <?php echo e($activePortal === 'admin' ? 'Staff sign in' : 'Welcome back'); ?>

    </h1>
    <p class="text-ink/60 mb-8">
        <?php echo e($activePortal === 'admin' ? 'Sign in to manage the site.' : 'Sign in to continue your Sinel Academy training.'); ?>

    </p>

    <?php if($errors->any()): ?>
        <div class="mb-6 rounded-2xl border border-coral/30 bg-coral/5 text-coral px-4 py-3 text-sm">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-5">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="portal" value="<?php echo e($activePortal); ?>">

        <div>
            <label for="email" class="block text-sm font-medium text-ink mb-2">Email</label>
            <input type="email" name="email" id="email" required autofocus
                   value="<?php echo e(old('email')); ?>"
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="you@example.com">
        </div>

        <div>
            <div class="flex items-center justify-between mb-2">
                <label for="password" class="block text-sm font-medium text-ink">Password</label>
            </div>
            <input type="password" name="password" id="password" required
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
        </div>

        <label class="flex items-center gap-2.5 cursor-pointer">
            <input type="checkbox" name="remember" value="1" class="w-4 h-4 rounded border-line text-emerald focus:ring-emerald">
            <span class="text-sm text-ink/60">Remember me</span>
        </label>

        <button type="submit"
                class="w-full inline-flex items-center justify-center gap-2 bg-emerald hover:bg-emerald-light text-white font-semibold px-6 py-3 rounded-full transition-colors">
            Sign In
        </button>
    </form>

    <?php if($activePortal === 'student'): ?>
        <p class="mt-8 text-sm text-ink/50">
            New to Sinel Academy?
            <a href="<?php echo e(route('register')); ?>" class="text-emerald font-semibold">Create an account</a>
        </p>
    <?php endif; ?>

    <a href="<?php echo e(route('home')); ?>" class="mt-8 inline-flex items-center gap-2 text-sm text-ink/40 hover:text-ink transition-colors">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        Back to site
    </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/auth/login.blade.php ENDPATH**/ ?>
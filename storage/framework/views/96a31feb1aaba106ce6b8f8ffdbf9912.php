

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-4">
        <span class="w-8 h-px bg-coral"></span> Welcome
    </span>
    <h1 class="font-display text-3xl sm:text-4xl font-semibold text-ink tracking-tight mb-2">
        Hi <?php echo e(explode(' ', auth()->user()->name)[0]); ?>.
    </h1>
    <p class="text-ink/60 mb-10 max-w-lg">
        This is your Sinel Academy dashboard. Cohort enrollment and course progress will appear here
        once a cohort is scheduled — for now, keep your profile up to date so we can place you correctly.
    </p>

    <div class="grid sm:grid-cols-2 gap-5 mb-10">
        <div class="bg-card border border-line rounded-3xl p-7">
            <span class="w-11 h-11 rounded-full bg-emerald/10 flex items-center justify-center">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="text-emerald"><path d="M22 10 12 5 2 10l10 5 10-5Z"/><path d="M6 12v5c0 1.5 3 3 6 3s6-1.5 6-3v-5"/></svg>
            </span>
            <p class="mt-4 font-display text-lg font-semibold text-ink">No active cohort yet</p>
            <p class="mt-1 text-sm text-ink/50">You'll see your enrolled program here once a cohort starts.</p>
        </div>

        <div class="bg-card border border-line rounded-3xl p-7">
            <span class="w-11 h-11 rounded-full bg-emerald/10 flex items-center justify-center">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="text-emerald"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            </span>
            <p class="mt-4 font-display text-lg font-semibold text-ink">Complete your profile</p>
            <p class="mt-1 text-sm text-ink/50 mb-4">Add a phone number so our team can reach you about cohorts.</p>
            <a href="<?php echo e(route('profile.edit')); ?>" class="inline-flex items-center gap-1.5 text-sm font-semibold text-emerald">
                Edit profile
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>

    <div class="bg-emerald-deep text-sage rounded-3xl p-8">
        <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-3">Interested in a cohort?</p>
        <p class="font-display text-xl italic mb-5 max-w-md">Reach out and we'll let you know when the next one opens near you.</p>
        <a href="mailto:nelson@sinelhospitality.com?subject=Academy%20Cohort%20Interest"
           class="inline-flex items-center gap-2 bg-coral hover:bg-coral-dark text-white font-semibold px-5 py-2.5 rounded-full transition-colors text-sm">
            Email Us
        </a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/student/dashboard.blade.php ENDPATH**/ ?>
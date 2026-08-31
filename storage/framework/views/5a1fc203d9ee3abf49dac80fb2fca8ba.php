

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-8">
        <h1 class="text-2xl font-semibold text-ink">Welcome back, <?php echo e(explode(' ', auth()->user()->name)[0]); ?>.</h1>
        <p class="text-sm text-ink/50 mt-1">Here's what's happening on the site.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-10">
        <div class="bg-card border border-line rounded-3xl p-6">
            <p class="text-xs font-mono uppercase tracking-wide text-ink/40">Projects</p>
            <p class="mt-2 font-display text-3xl font-semibold text-ink"><?php echo e($stats['projects_total']); ?></p>
            <p class="text-xs text-ink/40 mt-1"><?php echo e($stats['projects_published']); ?> published</p>
        </div>
        <div class="bg-card border border-line rounded-3xl p-6">
            <p class="text-xs font-mono uppercase tracking-wide text-ink/40">Students</p>
            <p class="mt-2 font-display text-3xl font-semibold text-ink"><?php echo e($stats['students_total']); ?></p>
            <p class="text-xs text-ink/40 mt-1">registered accounts</p>
        </div>
        <div class="bg-card border border-line rounded-3xl p-6">
            <p class="text-xs font-mono uppercase tracking-wide text-ink/40">Admins</p>
            <p class="mt-2 font-display text-3xl font-semibold text-ink"><?php echo e($stats['admins_total']); ?></p>
            <p class="text-xs text-ink/40 mt-1">staff accounts</p>
        </div>
        <a href="<?php echo e(route('admin.projects.create')); ?>" class="bg-emerald hover:bg-emerald-light transition-colors rounded-3xl p-6 flex flex-col justify-between text-white">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
            <p class="mt-4 font-semibold text-sm">Add a Project</p>
        </a>
    </div>

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="bg-card border border-line rounded-3xl overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b border-line">
                <p class="font-semibold text-ink text-sm">Recent Projects</p>
                <a href="<?php echo e(route('admin.projects.index')); ?>" class="text-xs font-semibold text-emerald">View all</a>
            </div>
            <?php $__empty_1 = true; $__currentLoopData = $recentProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="flex items-center gap-3 px-6 py-3.5 border-b border-line last:border-0">
                    <?php if($project->cover_image_url): ?>
                        <img src="<?php echo e($project->cover_image_url); ?>" alt="" class="w-8 h-8 rounded-lg object-cover shrink-0">
                    <?php else: ?>
                        <span class="w-8 h-8 rounded-lg bg-sage border border-line shrink-0"></span>
                    <?php endif; ?>
                    <div class="min-w-0">
                        <p class="text-sm font-medium text-ink truncate"><?php echo e($project->title); ?></p>
                        <p class="text-xs text-ink/40"><?php echo e($project->location); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="px-6 py-6 text-sm text-ink/40">No projects yet.</p>
            <?php endif; ?>
        </div>

        <div class="bg-card border border-line rounded-3xl overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b border-line">
                <p class="font-semibold text-ink text-sm">Recent Students</p>
            </div>
            <?php $__empty_1 = true; $__currentLoopData = $recentStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="flex items-center gap-3 px-6 py-3.5 border-b border-line last:border-0">
                    <span class="w-8 h-8 rounded-full bg-emerald/10 text-emerald flex items-center justify-center text-xs font-semibold shrink-0">
                        <?php echo e(strtoupper(substr($student->name, 0, 1))); ?>

                    </span>
                    <div class="min-w-0">
                        <p class="text-sm font-medium text-ink truncate"><?php echo e($student->name); ?></p>
                        <p class="text-xs text-ink/40 truncate"><?php echo e($student->email); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="px-6 py-6 text-sm text-ink/40">No students registered yet.</p>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>
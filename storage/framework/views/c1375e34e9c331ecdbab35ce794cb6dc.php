

<?php $__env->startSection('title', 'Projects — Sinel Hospitality'); ?>
<?php $__env->startSection('meta_description', 'A directory of hotel, resort and residence projects managed by Sinel Hospitality across Africa.'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-16 sm:py-20 md:py-24">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <a href="<?php echo e(route('home')); ?>#insights" class="inline-flex items-center gap-2 text-sm text-ink/60 hover:text-emerald transition-colors mb-10">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Back to home
        </a>

        <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
            <span class="w-8 h-px bg-coral"></span> Insights
        </span>
        <h1 class="font-display text-4xl sm:text-6xl font-medium italic text-ink tracking-tight leading-[1.1] mb-14">
            The houses.
        </h1>

        <?php if($projects->isEmpty()): ?>
            <div class="bg-card border border-line rounded-3xl p-10 text-center text-ink/60">
                No projects have been published yet.
            </div>
        <?php else: ?>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('projects.show', $project)); ?>"
                       class="group relative aspect-[4/5] rounded-xl overflow-hidden reveal photo-frame"
                       <?php if (! ($project->cover_image_url)): ?> style="background: linear-gradient(160deg, <?php echo e($project->color_from); ?>, <?php echo e($project->color_to); ?>);" <?php endif; ?>>
                        <?php if($project->cover_image_url): ?>
                            <img src="<?php echo e($project->cover_image_url); ?>" alt="<?php echo e($project->title); ?>" class="absolute inset-0 w-full h-full object-cover">
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-ink/70 via-ink/10 to-transparent"></div>
                        <div class="absolute top-5 left-5">
                            <span class="font-mono text-[10px] uppercase tracking-[0.15em] text-coral bg-ink/30 backdrop-blur px-2.5 py-1 rounded-full">
                                <?php echo e($project->category); ?>

                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <p class="font-display text-xl font-semibold text-white leading-tight"><?php echo e($project->title); ?></p>
                            <p class="text-sm text-white/70 mt-1"><?php echo e($project->location); ?></p>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\My Apps\sinel_web\sinel_web\resources\views/projects/index.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
<div class="flex items-center justify-between gap-4 mb-8">
    <div>
        <h1 class="text-2xl font-semibold text-ink">Projects</h1>
        <p class="text-sm text-ink/50 mt-1">These populate the &ldquo;Insights &mdash; The Project Index&rdquo; section on the homepage.</p>
    </div>
    <a href="<?php echo e(route('admin.projects.create')); ?>"
       class="inline-flex items-center gap-2 bg-emerald hover:bg-emerald-light text-white text-sm font-semibold px-5 py-2.5 rounded-full transition-colors shrink-0">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
        Add Project
    </a>
</div>

<div class="bg-card border border-line rounded-3xl overflow-hidden">
    <?php if($projects->isEmpty()): ?>
        <div class="p-10 text-center text-ink/50 text-sm">
            No projects yet. <a href="<?php echo e(route('admin.projects.create')); ?>" class="text-emerald font-medium">Add your first one</a>.
        </div>
    <?php else: ?>
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-line text-left text-ink/40 text-xs uppercase tracking-wide">
                    <th class="px-6 py-4 font-medium">Order</th>
                    <th class="px-6 py-4 font-medium">Project</th>
                    <th class="px-6 py-4 font-medium hidden sm:table-cell">Location</th>
                    <th class="px-6 py-4 font-medium hidden md:table-cell">Category</th>
                    <th class="px-6 py-4 font-medium">Status</th>
                    <th class="px-6 py-4 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b border-line last:border-0">
                        <td class="px-6 py-4 text-ink/40 font-mono text-xs"><?php echo e($project->sort_order); ?></td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <?php if($project->cover_image_url): ?>
                                    <img src="<?php echo e($project->cover_image_url); ?>" alt="" class="w-9 h-9 rounded-lg object-cover shrink-0">
                                <?php else: ?>
                                    <span class="w-9 h-9 rounded-lg bg-sage border border-line flex items-center justify-center shrink-0">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-ink/30"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-5-5L5 21"/></svg>
                                    </span>
                                <?php endif; ?>
                                <span class="font-medium text-ink"><?php echo e($project->title); ?></span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-ink/60 hidden sm:table-cell"><?php echo e($project->location); ?></td>
                        <td class="px-6 py-4 text-ink/60 hidden md:table-cell"><?php echo e($project->category); ?></td>
                        <td class="px-6 py-4">
                            <?php if($project->is_published): ?>
                                <span class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald"></span> Published
                                </span>
                            <?php else: ?>
                                <span class="inline-flex items-center gap-1.5 text-xs font-medium text-ink/40">
                                    <span class="w-1.5 h-1.5 rounded-full bg-ink/30"></span> Draft
                                </span>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-end gap-2">
                                <a href="<?php echo e(route('projects.show', $project)); ?>" target="_blank"
                                   class="text-ink/40 hover:text-emerald transition-colors" title="View on site">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><path d="M15 3h6v6"/><path d="M10 14 21 3"/></svg>
                                </a>
                                <a href="<?php echo e(route('admin.projects.edit', $project)); ?>"
                                   class="text-ink/40 hover:text-emerald transition-colors" title="Edit">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"/></svg>
                                </a>
                                <form method="POST" action="<?php echo e(route('admin.projects.destroy', $project)); ?>"
                                      onsubmit="return confirm('Delete this project? This can\'t be undone.');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-ink/40 hover:text-coral transition-colors" title="Delete">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/admin/projects/index.blade.php ENDPATH**/ ?>
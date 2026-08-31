

<?php $__env->startSection('title', 'Edit Project'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-8">
    <a href="<?php echo e(route('admin.projects.index')); ?>" class="inline-flex items-center gap-2 text-sm text-ink/50 hover:text-emerald transition-colors mb-3">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        Projects
    </a>
    <h1 class="text-2xl font-semibold text-ink">Edit &ldquo;<?php echo e($project->title); ?>&rdquo;</h1>
</div>

<form method="POST" action="<?php echo e(route('admin.projects.update', $project)); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <?php echo $__env->make('admin.projects._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/admin/projects/edit.blade.php ENDPATH**/ ?>
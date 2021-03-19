
<?php $__env->startSection('title'); ?>
    Specific Task
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>
            The task is to <?php echo e($task->task_column); ?> <br>
        </h3>
        <h5>
            Is it done?<br> <br>
                <?php if($task->done == 0): ?>
                    <span class="text-danger"> Not Yet</span><br>
                <?php else: ?>
                    <span class="text-success"> Yes, It is done</span><br>
                <?php endif; ?>
        </h5>

        <a href="<?php echo e(route('tasks.index')); ?>">Back</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programming\Laravel App\app_8\resources\views/pages/task.blade.php ENDPATH**/ ?>
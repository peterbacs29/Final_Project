
<?php $__env->startSection('title'); ?>
    Edit task
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-8 offset-md-2">  
            <h4>Edit Task</h4>

            <form action="<?php echo e(route('tasks.update', $task->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="form-group">
                    <label class="form-label">Task</label>
                    <input type="text" name="task_input" class="form-control" required placeholder="Enter task here!">
                    <input type="submit" value="Update" class="mt-2 btn btn-success">
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programming\Laravel App\app_8\resources\views/pages/edit.blade.php ENDPATH**/ ?>
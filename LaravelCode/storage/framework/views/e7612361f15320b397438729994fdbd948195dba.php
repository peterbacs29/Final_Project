
<?php $__env->startSection('title'); ?>
    Add task
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-8 offset-md-2">  
            <h4>Add Task</h4>

            <form action="<?php echo e(route('tasks.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <div class="form-group">
                    <label class="form-label">New Task</label>
                    <input type="text" class="form-control" name="task_input" required placeholder="Enter task here!">
                    <input type="submit" value="Add" class="mt-2 btn btn-info">
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programming\Laravel App\app_8\resources\views/pages/add.blade.php ENDPATH**/ ?>
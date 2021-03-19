
<?php $__env->startSection('title'); ?>
    Edit task
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-8 offset-md-2">  

            <form action="<?php echo e(route('tasks.update', $task->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="mt-5 pb-3 container" id="div_add_1">
                <label class="card-title pt-5 fw-bold fs-5" id="edit_event_h5">Edit Event</label>
                    <br><br>
                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Event Name</label>
                        <input class="col-sm-3" value="<?php echo e($task->task_column); ?>" type="text"  name="task_input_eventName" required > 

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Date</label>
                        <input class="col-sm-3" value="<?php echo e($task->date); ?>"type="date" name="date">

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Incharge</label>
                        <input class="col-sm-3" value="<?php echo e($task->incharge); ?>" type="text" name="task_input_inchargeName" required placeholder="Enter incharge name">

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Venue</label>
                        <input class="col-sm-3" value="<?php echo e($task->venue); ?>" type="text" name="task_input_venue" required placeholder="Enter venue">

                        <br><br>

                        <input type="submit" value="Edit" class="mb-3 btn btn-info" style="margin-right:30px; margin-left:130px;">
                        <a class="mb-3 btn btn-secondary" href="<?php echo e(route('tasks.index')); ?>">Back</a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programming\Laravel App\app_9\resources\views/pages/edit.blade.php ENDPATH**/ ?>
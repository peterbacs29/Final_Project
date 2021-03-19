
<?php $__env->startSection('title'); ?>
    Specific Task
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="mt-5 pb-3 container" id="div_add_1">
                <label class="card-title pt-5 fw-bold fs-5" id="add_event_h5">Event Details </label>
                    <br><br>
                    
                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;"><h3>Event Name: <?php echo e($task->task_column); ?></h3></label>

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;"><h3>Schedule: <?php echo e($task->date); ?></h3></label>

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;"><h3>Venue: <?php echo e($task->venue); ?></h3></label>
  
                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;"><h3>In charge: <?php echo e($task->incharge); ?></h3></label>

                        <br><br>
                        <a class="mb-3 btn btn-secondary" href="<?php echo e(route('tasks.index')); ?>">Back</a>
                        
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programming\Laravel App\app_9\resources\views/pages/task.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title'); ?>
    To do list
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-8 offset-md-2">

                <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">Add task</a>

            <table class="table">
                <thead>
                    <tr>
                        <td><b>ID<b></td>
                        <td><b>Task<b></td>
                        <td><b>Done<b></td>
                        <td><b>Edit<b></td>
                        <td><b>Delete<b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($task->id); ?></td>
                            <td>
                                <a href="<?php echo e(route('tasks.show', $task->id)); ?>">
                                    <?php echo e($task->task_column); ?>

                                </a>
                            </td>
                            <td> 
                                 <?php if($task->done === 0): ?>  
                                        <a href="<?php echo e(route('done', $task->id)); ?>">
                                            <button type="button" class="btn btn-secondary" >
                                                Awaiting
                                            </button>
                                        </a>
                                <?php else: ?>
                                        <button type="button" class="btn btn-success" disabled>
                                            Done
                                        </button>      
                                <?php endif; ?>     
                            </td>   

                            <td>
                                <a href="<?php echo e(route('tasks.edit', $task->id)); ?>">
                                    <button type="button" class="btn btn-info">
                                        Edit
                                    </button>
                                </a>
                            </td>

                            <td>
                                <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" type="button">
                                        Delete
                                    </button>

                                        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-danger" id="staticBackdropLabel1">Warning!</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete it?
                                                    </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button  class="btn btn-danger">Understood</button>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programming\Laravel App\app_8\resources\views/pages/home.blade.php ENDPATH**/ ?>
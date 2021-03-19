
<?php $__env->startSection('title'); ?>
    Events Management System
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- N A V B A R =============================================================================================================================================== -->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #99ccff;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Assumption College of Davao</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!-- E N D of N A V B A R =============================================================================================================================================== -->

<!-- C O N T E N T (EMS) =============================================================================================================================================== -->
<h1 class="pb-5 text-center fw-bold pt-5">
    Events Management System
</h1>
<br>
<a href="<?php echo e(route('tasks.create')); ?>" id="a_addEvent">
    <button id="btn">
        <i class="bi bi-folder-plus" style="font-size:20px;"></i>
        &nbsp;Add Event
    </button>
</a>

<br><br><br>
<div class="row" id="div_box1">
<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 mb-5">
        <div class="bg-info fs-2" id="relative">
        <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <div id="topright">
                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop1" type="button" id="btn_x">
                    <i class="bi bi-x-square-fill" style="font-size:35px; color:red;"></i>
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
                                <button class="btn btn-danger">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
                                            
            </div>
            <i class="bi bi-calendar2-week"></i>  
            <?php echo e($task->task_column); ?>   
        </div>
        
            <div class="modal-body text-center shadow">
                <img src="images/acd.jpg" id="acd_img"> 
                <br><br><br>
                <a class="mb-3 btn btn-info" href="<?php echo e(route('tasks.show', $task->id)); ?>">
                <i class="bi bi-info-circle"></i>&nbsp; View</a>
                <a class="mb-3 btn btn-secondary" href="<?php echo e(route('tasks.edit', $task->id)); ?>" id="edit">
                <i class="bi bi-pencil-square"></i>&nbsp; Edit</a>
            </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<!-- E N D of C O N T E N T (EMS) =============================================================================================================================================== -->        



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programming\Laravel App\app_9\resources\views/pages/home.blade.php ENDPATH**/ ?>
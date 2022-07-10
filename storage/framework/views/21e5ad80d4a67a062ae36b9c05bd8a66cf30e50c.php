


<?php $__env->startSection('content'); ?>

    <h2>Create New Students</h2>
    <form class="form-horizontal" action="<?php echo e(route('update',$student->id)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo e($student->name); ?>" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
            <label for="registration_id">Registration Number:</label>
            <input type="number" class="form-control" name="registration_id" id="registration_id" value="<?php echo e($student->registration_id); ?>" placeholder="registration Num">
        </div>

        <div class="form-group">
            <label for="department_name">Department:</label>
            <input type="text" class="form-control" name="department_name" id="department_name" value="<?php echo e($student->department_name); ?>" placeholder="department_name">
        </div>

        <div class="form-group">
            <label for="info">Info:</label>
            <input class="form-control" name="info" id="info" rows="" value="<?php echo e($student->info); ?>" placeholder="">
        </div>

        <button type="submit" class="btn btn-default">Register Student</button>
    </form>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Student_Management\resources\views/edit.blade.php ENDPATH**/ ?>



<?php $__env->startSection('content'); ?>

    <h2>Create New Students</h2>
    <form class="form-horizontal" action="<?php echo e(route('store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
            <label for="registration_id">Registration Number:</label>
            <input type="number" class="form-control" name="registration_id" id="registration_id" placeholder="registration Num">
        </div>

        <div class="form-group">
            <label for="department_name">Department:</label>
            <input type="text" class="form-control" name="department_name" id="department_name" placeholder="department_name">
        </div>

        <div class="form-group">
            <label for="info">Info:</label>
            <textarea class="form-control" name="info" id="info" rows="" placeholder=""></textarea>
        </div>

        <button type="submit" class="btn btn-default">Register Student</button>
    </form>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Student_Management\resources\views/create.blade.php ENDPATH**/ ?>
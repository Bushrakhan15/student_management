


<?php $__env->startSection('content'); ?>

    <table class="table table-responsive table-hover">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Registration Id</th>
            <th>Department Name</th>
            <th>Info</th>
            <th>Action</th>
        </tr>
        <?php $i=0;?>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $i++;?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->registration_id); ?></td>
                <td><?php echo e($student->department_name); ?></td>
                <td><?php echo e($student->info); ?></td>
                <td>
                    <a href="<?php echo e(route('edit',$student->id)); ?>" class="btn btn-success">Edit</a>

                    <form class="form-inline" action="<?php echo e(route('delete', $student->id)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="submit" class="btn btn-danger" value="delete">
                    </form>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Student_Management\resources\views/index.blade.php ENDPATH**/ ?>
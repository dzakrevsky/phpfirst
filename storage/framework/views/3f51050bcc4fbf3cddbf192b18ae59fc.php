<!-- resources/views/users/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <h1>Список пользователей</h1>

    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($user->name); ?></li>
            <li><?php echo e($user->amount); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\example2\resources\views/users/index.blade.php ENDPATH**/ ?>
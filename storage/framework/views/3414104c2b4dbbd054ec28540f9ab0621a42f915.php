


<?php $__env->startSection('container'); ?>
<center>
    <h1>About Me</h1>
    <h3><?php echo e($name); ?></h3>
    <p><?php echo e($email); ?></p>
    <img src="img/<?php echo e($image); ?>" alt="<?php echo e($name); ?>" width="150">
</center>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\coba-web\resources\views/about.blade.php ENDPATH**/ ?>
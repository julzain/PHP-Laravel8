


<?php $__env->startSection('container'); ?>



<article>
<h2><?php echo e($post["title"]); ?></h2>
<h5><?php echo e($post["author"]); ?></h5>
<p><?php echo e($post["body"]); ?></p>
</article>

<a href="/blog"> Back To Post</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\coba-web\resources\views/post.blade.php ENDPATH**/ ?>
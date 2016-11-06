<?php $__env->startSection('content'); ?>

<h1>Slim</h1>
    <?php if(isset($name)): ?>
        <h2>Hello <?php echo e($name); ?>!.</h2>
    <?php else: ?>
        <p>Try <a href="http://www.slimframework.com">SlimFramework</a></p>
        <?php echo e($path); ?>

    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
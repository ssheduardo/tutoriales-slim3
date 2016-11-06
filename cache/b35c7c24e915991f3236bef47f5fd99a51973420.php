<?php $__env->startSection('content'); ?>
<h2>Usuarios</h2>
	<?php if(is_array($all)): ?>
		<div class="row">
			<?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<div class="col-md-8">
					<?php echo e($user['nombre']); ?> <?php echo e($user['apellidos']); ?>

                </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
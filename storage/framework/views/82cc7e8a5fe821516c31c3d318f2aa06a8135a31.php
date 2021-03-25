

<?php if( session()->has('success') ): ?>
  <div class="alert alert-success text-center"><?php echo e(session()->get('success')); ?></div>
<?php endif; ?>

<?php if( session()->has('error') ): ?>
  <div class="alert alert-danger text-center"><?php echo e(session()->get('error')); ?></div>
<?php endif; ?>

<?php if( session()->has('danger') ): ?>
  <div class="alert alert-danger text-center"><?php echo e(session()->get('danger')); ?></div>
<?php endif; ?>

<?php if( session()->has('info') ): ?>
  <div class="alert alert-info text-center"><?php echo e(session()->get('info')); ?></div>
<?php endif; ?>

<?php if($errors->any()): ?>
  <ul class="list-group">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="list-group-item list-group-item-danger"><?php echo e($e); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\menu\resources\views/layouts/msgs.blade.php ENDPATH**/ ?>
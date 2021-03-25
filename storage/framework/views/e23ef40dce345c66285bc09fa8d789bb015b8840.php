<?php $__env->startPush('css'); ?>
  <style>
  .modal-body
  {
    background: #ecf0f5;
  }
  .modal-content
  {
    box-shadow: unset
  }
  form {
    width:80%;
    margin: auto;
    padding: 20px !important;
    background: #fff;
  }

  @media(max-width: 775px)
  {
    form {
      width: 100%;
      padding: 0
    }
  }
  </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Modal -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    أضافه دفعة
    </h1>

    <hr style="border-color:#aaa"/>

    </section>
    <?php echo $__env->make('layouts.msgs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Main content -->
<section class="content">

  <div class="modal-content">

    <div class="modal-body">

      <form id="store-form" method="post" action="<?php echo e(route('admin.Payments.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="form-group">
        <label >البراند</label>
        <select class="form-control" name="brand_id" required>
          <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option
          <?php echo e(old('brand_id') == $brand->id ? 'selected' : ''); ?>

          value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>

        <div class="form-group">
          <label>التاريخ</label>
          <input type="date" class="form-control" required name="date" value="<?php echo e(old('date')); ?>"/>
        </div>

        <div class="form-group">
          <label>ملاحظات</label>
          <textarea class="form-control" name="note"><?php echo e(old('note')); ?></textarea>
        </div>

        <button type="submit" class="f-right w-100 btn btn-success">حفظ</button>
        <div class="clear"></div>
      </form>

    </div>
  </div>
</div>

<!-- end add model --->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\menu\resources\views/admin/payments/create.blade.php ENDPATH**/ ?>
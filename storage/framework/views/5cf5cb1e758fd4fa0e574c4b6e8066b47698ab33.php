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
    براند جديد
    </h1>

    <hr style="border-color:#aaa"/>

    </section>
    <?php echo $__env->make('layouts.msgs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Main content -->
<section class="content">

  <div class="modal-content">

    <div class="modal-body">

      <form id="store-form" method="post" action="<?php echo e(route('admin.Brands.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="form-group">
          <label>الاسم</label>
          <input type="text" class="form-control"  required name="name" value="<?php echo e(old('name')); ?>">
        </div>
        
        <div class="form-group">
          <label>لون الخلفيه</label>
          <input type="color" class="form-control" name="background_color" value="<?php echo e(old('background_color')); ?>"/>
        </div>

        <div class="form-group">
          <label>لون الخط</label>
          <input type="color" class="form-control" name="font_color" value="<?php echo e(old('font_color')); ?>"/>
        </div>

        <div class="form-group">
          <label>صوره الخلفيه</label>
          <input type="file" accept="image/*" class="form-control"  required name="image_cover">
        </div>

        <div class="form-group">
          <label>رقم الهاتف</label>
          <input type="text" class="form-control" required name="phone" value="<?php echo e(old('phone')); ?>">
        </div>

        <div class="form-group">
          <label>واتس اب</label>
          <input type="text" class="form-control"  name="whatsapp" value="<?php echo e(old('whatsapp')); ?>">
        </div>

        <div class="form-group">
          <label>فيس بوك</label>
          <input type="text" class="form-control"  name="facebook" value="<?php echo e(old('facebook')); ?>">
        </div>

        <div class="form-group">
          <label>انستغرام</label>
          <input type="text" class="form-control"  name="instagram" value="<?php echo e(old('instagram')); ?>">
        </div>


        <button type="submit" class="f-right w-100 btn btn-success">حفظ</button>
        <div class="clear"></div>
      </form>

    </div>
  </div>
</div>

<!-- end add model --->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\menu\resources\views/admin/brands/create.blade.php ENDPATH**/ ?>
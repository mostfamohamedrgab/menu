
<?php $__env->startSection('content'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 >
          الدفعات
          </h1>

          <hr style="border-color:#aaa"/>

            <a style="float:right;text-align:right" class=" btn btn-primary" href="<?php echo e(route('admin.Payments.create')); ?>">
            اضافة<i class="fa fa-plus"></i>


        </a>
          <div style="clear:both"></div>
          </section>
          <?php echo $__env->make('layouts.msgs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main content -->
        <section class="content">
    <table id="example" class="table display" style="width:100%">
      <thead>
        <tr >
          <th>#</th>
          <th>البراند</th>
          <th>التاريخ</th>
          <th>ملاحظات</th>
          <th>اجراء</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($payment->id); ?></td>
          <td><?php echo e($payment->name); ?></td>
          <td><?php echo e($payment->date); ?></td>
          <td><?php echo e($payment->note); ?></td>

          <td>

            <a  class="btn-sm btn btn-primary" href="<?php echo e(route('admin.Payments.edit', $payment->id)); ?>">
               <i class="fa fa-edit"></i>
            </a>
            <form class="delete"
            style="display:inline-block;padding:0"
            action="<?php echo e(route('admin.Payments.destroy',$payment->id)); ?>" method="post">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <input type="submit"  class="btn-sm btn btn-danger" value="حذف" />
            </form>

          </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
  <style type="text/css">
      form {
        text-align: right !important
      }
  </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
  <script>
    dataTable(false);
    $(document).on('click','.delete', function (e){

      if( confirm('تاكيد ؟ ') )
      {
        return true;
      }else{
        return false;
      }

    });

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })

  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\menu\resources\views/admin/payments/index.blade.php ENDPATH**/ ?>
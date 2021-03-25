
<?php $__env->startSection('content'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 >
            لوحة التحكم / المسؤوليين
          </h1>

          <hr style="border-color:#aaa"/>
          <button style="display:block;text-align:right" type="button" class=" btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            اضافة مسؤول <i class="fa fa-shield"></i>
          </button>
          <div style="clear:both"></div>
          </section>
          <?php echo $__env->make('layouts.msgs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main content -->
        <section class="content">

    <table id="example" class="display" style="width:100%">
      <thead>
        <tr >
          <th>#</th>
          <th>الاسم</th>
          <th>الايميل</th>
          <th>اجراء</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($admin->id); ?></td>
          <td><?php echo e($admin->name); ?></td>
          <td><?php echo e($admin->email); ?></td>


          <td>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-<?php echo e($admin->id); ?>">
              تعديل <i class="fa fa-edit"></i>
            </button>


          <form class="delete"
          style="display:inline-block"
          action="<?php echo e(route('admin.Admins.destroy',$admin->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="submit" class="btn btn-danger" value="حذف" />
          </form>

          </td>
        </tr>


        <!--edit  Modal -->
      <div class="modal fade" id="edit-<?php echo e($admin->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">تعديل <?php echo e($admin->name); ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form method="post" action="<?php echo e(route('admin.Admins.update',$admin->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                  <label>الاسم</label>
                  <input type="text" class="form-control" required name="name" value="<?php echo e($admin->name); ?>">
                </div>
                <div class="form-group">
                  <label>الايميل</label>
                  <input type="email" class="form-control"  value="<?php echo e($admin->email); ?>" required name="email">
                </div>

                <div class="form-group">
                  <label>كلمه السر</label>
                  <input type="password" class="form-control"  name="password">
                </div>


                <button type="submit" class="btn btn-primary">تعديل</button>
          </form>

            </div>
          </div>
        </div>
      </div>
        <!-- end edit model --->

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <!-- start add model --->
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">اضافه عضو جديد</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="post" action="<?php echo e(route('admin.Admins.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label>الاسم</label>
              <input type="text" class="form-control" required name="name" value="<?php echo e(old('name')); ?>">
            </div>
            <div class="form-group">
              <label>الايميل</label>
              <input type="email" class="form-control"  value="<?php echo e(old('email')); ?>" required name="email">
            </div>

            <div class="form-group">
              <label>كلمه السر</label>
              <input type="password" class="form-control" required name="password">
            </div>


            <button type="submit" class="btn btn-primary">حفظ</button>
      </form>

        </div>
      </div>
    </div>
  </div>
    <!-- end add model --->
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

    $(document).on('click','.delete', function (e){

      if( confirm('تاكيد ؟') )
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

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\menu\resources\views/admin/admins/index.blade.php ENDPATH**/ ?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo e(asset('public/admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo e(auth('admin')->user()->name); ?> </p>
      </div>
    </div>
  <ul class="sidebar-menu">

    <li>
      <a href="<?php echo e(route('admin.Admins.index')); ?>">
        <i class="fa fa-shield"></i> <span>المسؤوليين</span>
        <small class="label pull-right bg-yellow">
          <?php echo e(App\Admin::count()); ?>

        </small>
      </a>
    </li>

    <li>
      <a href="<?php echo e(route('admin.Brands.index')); ?>">
        <i class="fa fa-angellist"></i> <span>البراندات</span>
        <small class="label pull-right bg-yellow">
          <?php echo e(App\Brand::count()); ?>

        </small>
      </a>
    </li>

    <li>
      <a href="<?php echo e(route('admin.Payments.index')); ?>">
        <i class="fa fa-money"></i> <span>الدفعات</span>
        <small class="label pull-right bg-yellow">
          <?php echo e(App\Payment::count()); ?>

        </small>
      </a>
    </li>



  </ul>
</section>
<!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\menu\resources\views/admin/layouts/rightNav.blade.php ENDPATH**/ ?>
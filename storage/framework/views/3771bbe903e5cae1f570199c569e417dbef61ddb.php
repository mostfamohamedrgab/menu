
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo e(url('Dashboard')); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b> التحكم</b>
          </span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo e(asset('public/admin/dist/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo e(auth('admin')->user()->name); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo e(asset('public/admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
                    <p>

                    </p>
                  </li>

                  <li class="user-footer">

                    <div class="pull-left">
                      <a class="btn btn-default btn-flat " href="<?php echo e(route('admin.logout')); ?>"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          خروج
                      </a>

                      <form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
                          <?php echo csrf_field(); ?>
                      </form>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>
<?php /**PATH C:\xampp\htdocs\menu\resources\views/admin/layouts/topNav.blade.php ENDPATH**/ ?>
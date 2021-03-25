<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ auth('admin')->user()->name }} </p>
      </div>
    </div>
  <ul class="sidebar-menu">

    <li>
      <a href="{{ route('admin.Admins.index') }}">
        <i class="fa fa-shield"></i> <span>المسؤوليين</span>
        <small class="label pull-right bg-yellow">
          {{ App\Admin::count() }}
        </small>
      </a>
    </li>

    <li>
      <a href="{{ route('admin.Brands.index') }}">
        <i class="fa fa-angellist"></i> <span>البراندات</span>
        <small class="label pull-right bg-yellow">
          {{ App\Brand::count() }}
        </small>
      </a>
    </li>

    <li>
      <a href="{{ route('admin.Payments.index') }}">
        <i class="fa fa-money"></i> <span>الدفعات</span>
        <small class="label pull-right bg-yellow">
          {{ App\Payment::count() }}
        </small>
      </a>
    </li>



  </ul>
</section>
<!-- /.sidebar -->
</aside>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('public/admin/dist/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('public/css/jquery.toast.css')); ?>" rel="stylesheet" />
  <style>
      * {
        text-align: right
      }
  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">مرحبا مجداد!</h1>
                  </div>
                  <form class="user" action="<?php echo e(route('admin.login')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <input type="email"
                      value="<?php echo e(old('email')); ?>"
                      required="required" name="email"
                      class="form-control form-control-user"
                      placeholder="البريد الالكتروني ">
                    </div>
                    <div class="form-group">
                      <input type="password" required="required" name="password" class="form-control form-control-user"  placeholder="كلمة السر ">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox"  value="on" name="remember_me" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">تذكرني</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block"
                    value="دخول" />
                    <hr>

                  </form>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('public/js/jquery.toast.js')); ?>"></script>
<!--- hundel messges --->
<?php if($errors->any()): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <script>
  $.toast({
      text : "<?php echo e($e); ?>",
      allowToastClose:true,
      hideAfter: 10000,
      position:'top-right',
      bgColor:'#ff0000'
  })
  </script>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session()->has('danger')): ?>
  <script>
  $.toast({
      text : "<?php echo e(session()->get('danger')); ?>",
      allowToastClose:true,
      hideAfter: 10000,
      position:'top-right',
      bgColor:'#ff0000'
  })
  </script>
<?php endif; ?>

<!--- end hundel messges --->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\menu\resources\views/admin/login.blade.php ENDPATH**/ ?>
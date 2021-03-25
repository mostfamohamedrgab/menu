<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="<?php echo e(asset('public/admin/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo e(asset('public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('public/admin/dist/css/AdminLTE.min.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('public/admin/dist/css/skins/_all-skins.min.css')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .content-header button {
      float: right;
    }
      h1, h2 ,h3 ,h4 ,h5 ,h6 {
        text-align: right !important
      }
      input , textarea , label {
        text-align:right
      }
      label  {
        display: block;
      }
      .text-r {
        text-align: right !important
      }

      table , #example{
        padding: 10px;
        direction: rtl;
        background:#fff;
        box-shadow: 1px 1px 2px #eee,-1px -1px 2px #eee;
      }
      table th
      {
        text-align: right;
      }
      table  td {
        font-weight: bolder;
        padding: 5px !important
      }
      .clear {
        clear: both;
      }
      .f-right {
        float: right
      }
    </style>
    <?php echo $__env->yieldPushContent('css'); ?>
  </head>
<?php /**PATH C:\xampp\htdocs\menu\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>
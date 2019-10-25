<!DOCTYPE html>

<html>
<head>
  <title>
    Admin Panel
  </title>
<?php echo $__env->make('theme.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php echo $__env->make('theme.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make('theme.left_aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <?php $__env->startSection('content'); ?>
 <?php echo $__env->yieldSection(); ?>
<?php echo $__env->make('theme.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('theme.control_aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<?php echo $__env->make('theme.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php echo $__env->make('frontend_theme.head.styles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <?php echo $__env->yieldPushContent('styles'); ?>
   <style>
        .btn.btn-primary {
            background: #FE980F;
            border: 0 none;
            border-radius: 0;
            margin-top: 0px;
        }
   </style>
</head>
<!--/head-->

<body>
    <?php echo $__env->make('frontend_theme.frontend_index.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--/header-->


    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>



    <?php echo $__env->make('frontend_theme.frontend_index.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- footer -->

   

    <?php echo $__env->make('frontend_theme.head.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
 
</body>

</html>



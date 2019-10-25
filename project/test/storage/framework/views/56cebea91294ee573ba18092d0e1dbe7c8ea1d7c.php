   
    
  <?php $__env->startSection('content'); ?>  
    <?php echo $__env->make('frontend_theme.frontend_index.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   


    <?php echo $__env->make('frontend_theme.frontend_index.section2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?> 
<?php echo $__env->make('frontend_theme.frontend_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
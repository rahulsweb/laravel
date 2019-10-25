



<?php $__env->startPush('styles'); ?> 


<?php $__env->startPush('scripts'); ?> 




<?php $__env->startSection('content'); ?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 class="text-center alert alert-default">
     Coupon Detail
    </h1>
  
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->

        <div class="container">
            <div class="row">
       
    
                <div class="col-md-9">
                <div class="card">
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/coupon')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                     
                        <br/>
                        <br/>

                        <div class="table-responsive list-group-item">
                                
                            <table id="example2" class="table table-bordered table-hover">
                                <tbody>
                                 
                                    <tr><th class="  "> Title </th><td class=""> <?php echo e($coupon->title); ?> </td></tr>
                                    <tr><th class="  "> Code </th><td class=""> <?php echo e($coupon->code); ?> </td></tr>
                                    <tr><th class="  "> Type </th><td class=""> <?php echo e($coupon->type); ?> </td></tr>
                                    <tr><th class="  "> Discount </th><td class=""> <?php echo e($coupon->discount); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
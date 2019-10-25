






<?php $__env->startPush('styles'); ?> 
<style>
  
</style>


<?php $__env->stopPush(); ?> 
       


<?php $__env->startPush('scripts'); ?> 


<script src="<?php echo e(asset('datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>


<?php $__env->stopPush(); ?>




<?php $__env->startSection('content'); ?>
<div class="content-wrapper  ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1 class="text-center alert alert-default">
               Banner Detail
                </h1>
              
              </section>
      
        <!-- Main content -->
        <section class="content container-fluid">
      
              <!-- /.content-wrapper -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
            
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/banner')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    
                        <br/>
                        <br/>

                        <div class="table-responsive list-group-item">
                            <table class="table">
                                <tbody>
                               
                                    <tr><th class=" "> Name </th><td class=""><strong class=""> <?php echo e($banner->name); ?> </strong></td></tr><tr><th class=" "> Image </th><td class=""><img src= "<?php echo e(asset('/images/'.$banner->image)); ?>" > </td></tr><tr><th class="  "> Description </th><td class=""> <?php echo e($banner->description); ?> </td></tr>
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
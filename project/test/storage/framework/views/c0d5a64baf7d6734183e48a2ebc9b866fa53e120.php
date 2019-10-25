



<?php $__env->startPush('styles'); ?> 


<?php $__env->startPush('scripts'); ?> 




<?php $__env->startSection('content'); ?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1 class="text-center ">
        User Detail
        </h1>
      
      </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->

        <div class="container box">
            <div class="row">
       
    
                <div class="col-md-12">
                    <div class="card">
                     
                        <div class="card-body">
    
                            <a href="<?php echo e(url('/admin/user')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    
                            <br/>
                            <br/>
    
                            <div class="table-responsive list-group-item">
                                <table class="table">
                                    <tbody>
                                     
                                        <tr><th class="  ">  Name </th><td class=""> <?php echo e($adminuser->first_name." ".$adminuser->last_name); ?> </td></tr>

                                        <tr><th class="  "> Email </th><td class=""> <?php echo e($adminuser->email); ?> </td></tr>
                                        <tr><th class=" "> Status </th><td class=""> <?php echo e($adminuser->status); ?> </td></tr>
                                        <tr><th class="  "> Role </th><td class="">
                                            
                                        <?php $__currentLoopData = $adminuser->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($role->name); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td></tr>

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
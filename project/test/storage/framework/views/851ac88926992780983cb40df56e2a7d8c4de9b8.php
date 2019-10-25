



<?php $__env->startPush('styles'); ?> 


<?php $__env->startPush('scripts'); ?> 




<?php $__env->startSection('content'); ?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1 class="text-center alert alert-default">
         Role Detail
        </h1>
      
      </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->

        <div class="box">
            <div class="row">
       
    
                <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/role')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                       
                        <br/>
                        <br/>

                        <div class="table-responsive list-group-item">
                                
                            <table id="example2" class="table table-bordered ">
                                <tbody>
                                   
                                    <tr><th class="text-muted"> Title </th><td> <strong class=""><?php echo e($role->name); ?> </strong></td></tr>
                                    <tr><th class=""> Permissions </th>
                                        
                                    <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td colspan="2" class="" >  <strong class="text-success"><?php echo e($permission->name); ?> </strong> </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <td></td>
                                    </tr>
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
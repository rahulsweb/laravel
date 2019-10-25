



<?php $__env->startPush('styles'); ?> 


<?php $__env->startPush('scripts'); ?> 




<?php $__env->startSection('content'); ?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1 class="text-center alert alert-default">
     Content Management System Details
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
    
                            <a href="<?php echo e(url('/admin/cms')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    
                            <br/>
                            <br/>
    
                            <div class="table-responsive list-group-item">
                                <table class="table">
                                    <tbody>
                                      
                                        <tr><th class="">  Name </th><td class=""><strong class=""> <?php echo e($content->name); ?></strong> </td></tr>

                                        <tr><th class=""> Title</th><td class=""><strong class=""><?php echo e($content->title); ?></strong></td></tr>

                                        <tr><th class="">Slug</th><td class=""><strong class=""><?php echo e($content->slug); ?></strong></td></tr>

                                        <tr><th > Content </th><td class=""><strong class=""><?php  echo htmlspecialchars_decode($content->content) ?></strong></td></tr>
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
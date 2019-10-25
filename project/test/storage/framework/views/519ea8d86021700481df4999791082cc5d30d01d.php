



<?php $__env->startPush('styles'); ?> 

<style>
.text-large
{
  font-size: 2em;
  text-align:center !important;
}
</style>

<?php $__env->stopPush(); ?> 
       
<?php $__env->startPush('scripts'); ?> 
 

<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <strong class="text-success text-large">
   Create Category
     
    </strong>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content ">

        <div class="container">
                <div class="row">
          
        
                  

            <div class="col-md-9">
                <div class="card">
           
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/category')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(url('/admin/category')); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <?php echo $__env->make('admin.category.form', ['formMode' => 'create'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        </form>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper --> 


 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
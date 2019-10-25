

<?php $__env->startSection('content'); ?>

<?php $__env->startPush('scripts'); ?> 

<!-- jQuery 3 -->

<script>
  $(function () {
    $('#example2').DataTable();
   
  });
</script>

<?php $__env->stopPush(); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 
  <section class="content-header">
      <h1 class="text-center alert alert-default">
     Product Detail
      </h1>
    
    </section>
  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->

       
            <div class="row">
       
    
                <div class="col-md-12 ">
                <div class="card">
                  
                    <div class="card-body ">

                        <a href="<?php echo e(url('/admin/product')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                     
                        <br/>
                        <br/>

                        <div class="table-responsive list-group-item">
                            <table id="example2" class="table table-bordered table-hover">
                                <tbody>
                                   
                                    <tr><th class="  "> Name </th><td class="" > <?php echo e($product->name); ?> </td></tr>
                                    <tr><th class=" "> Rate </th><td class=""> <?php echo e($product->rate); ?> </td></tr>
                                    <tr><th class="  "> image </th>
                                        <?php $__currentLoopData = $product->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td > <img src= " <?php echo e(asset($image->name)); ?>" width=50 heigth=50 ></td> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      
                                      
                                    </tr>

                   
                                     <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                      <tr><th class="  "> Category Name </th><td class=""> <?php echo e($products->name); ?> </td></tr>

                              <tr><th class="  "> Quantity </th><td class=""> <?php echo e($product->product_attribute->quantity); ?> </td></tr>
                                    <tr><th class="  "> Color </th><td class=""> <?php echo e($product->product_attribute->color); ?> </td></tr>
                                </tbody>
                            </table>
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
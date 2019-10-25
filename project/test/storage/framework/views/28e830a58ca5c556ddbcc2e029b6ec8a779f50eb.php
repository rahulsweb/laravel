 
<?php $__env->startPush('styles'); ?>



<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
   <div class="container">
       <div class="row">
  



           <div class="col-md-12 ">
               <div class="card">
                  
                   <div class="card-body">
                 




<ul class="list-group">
<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
 
<?php $total=""; ?>
</div>
<li class="list-group-item" style="margin-top:30px;">
<div class="col-md-3">
<section class="products" >

       <h5  >Order Code :<b class="text-info pull-right"><?php echo e($product->order_code); ?></h5> </b>
     <h5>Payment Type: <b class="text-warning pull-right"><?php echo e($product->orderPayment[0]->payment_type); ?></b></h5>
          <h5 >Payment status: <b class="text-danger  pull-right"><?php echo e($product->orderPayment[0]->status); ?></b></h5>
     <h5>Date <b class="text-danger  pull-right" ><?php echo e($product->log_order->last()->created_at); ?></b></h5>

     <?php $__currentLoopData = $product->order_carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $total+=$data->pivot->total; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <h5>Total Qty:<b class=" text-info pull-right"><?php echo e($product->order_carts->count('*')); ?></b></h5>
<h5>Total:<b class="text-danger  pull-right" ><?php echo e("Rs ".$total); ?></b></h5>
  <div class="product-card">

    <div class="product-image">

    </div>
    <div class="product-info">

    </div>
  </div>

  <!-- more products -->

</section>
</div>


<?php $__currentLoopData = $product->order_carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<section class="products text-center" style="display:inline-block; margin-left:30px;">

  <!-- It's likely you'll need to link the card somewhere. You could add a button in the info, link the titles, or even wrap the entire card in an <a href="..."> -->

   <div class="product-card">
 <a href="<?php echo e(url('product/detail', $items->id)); ?>">
    <div class="product-image">
     <img src="<?php echo e(asset($items->pivot->images)); ?>" width="100" height="100">
    </div>
    <div class="product-info">
      <strong><?php echo e($items->name); ?></strong>
      <h6><b class="text-success">Rs <?php echo e($items->rate); ?></b></h6>
    </div>
  </div>
</a>

  <!-- more products -->

</section>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

                 
    </div>       
                       
                               
                             
                     
                 

                   </div>
               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?> 

<!-- jQuery 3 -->

<script>
 $(function () {
   $('#example2').DataTable();
  
 });
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend_theme.frontend_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
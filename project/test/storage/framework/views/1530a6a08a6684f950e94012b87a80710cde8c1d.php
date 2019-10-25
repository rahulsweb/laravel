



<?php $__env->startPush('styles'); ?> 


<?php $__env->startPush('scripts'); ?> 




<?php $__env->startSection('content'); ?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1 class="text-center alert alert-default">
         order Detail
        </h1>
      
      </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->
 <div class="container">
       <div class="row">
  



           <div class="col-md-12 ">
               <div class="card">
                  
                   <div class="card-body">
                 





<ul class="list-group">

<div class="row">


</div>







     <div class="table-responsive list-group-item">
                            <table class="table">
                                <tbody>
                               
                                    <tr><th class=" "> Customer Name </th><td class=""><strong class=""> <?php echo e($orders->users->first_name." ".$orders->users->last_name); ?> </strong></td></tr>
                                    <tr><th class=" "> Customer Order Name </th><td class=""><strong class=""> <?php echo e($orders->billing_address->fullname); ?> </strong></td></tr>

                                     <tr><th class=" "> Customer Email </th><td class=""><strong class=""> <?php echo e($orders->users->email); ?> </strong></td></tr>
                                     <tr><th class=" "> Customer Billing Address </th><td class=""><strong class="">  <?php echo e($orders->billing_address->address1); ?> </strong></td></tr>
                                     <tr><th class=" "> Customer Shipping Address </th><td class=""><strong class=""> <?php echo e($orders->shipping_address->address1); ?></strong></td></tr>

                                                                          <tr><th class=" "> Order Code </th><td class=""><strong class=""> <?php echo e($orders->order_code); ?> </strong></td></tr>
                                                                          <tr><th class=" "> Order Payment Type </th><td class=""><strong class=""> <?php echo e($orders->orderPayment[0]->payment_type); ?> </strong></td></tr>
                                                                          <tr><th class=" "> Order status </th><td class=""><strong class=""> <?php echo e($orders->orderPayment[0]->status); ?> </strong></td></tr>
                                                                     <tr><th class=" "> Order Place Date </th><td class=""><strong class=""> <?php echo e($orders->log_order->last()->created_at); ?> </strong></td></tr>
 
 
  


                                                                     <tr><th class=" "> Total Price </th><td class=""><strong class=""> <?php echo e($orders->order_carts[0]->pivot->total_cart); ?> </strong></td></tr>
                                                                     <tr><th class=" "> Total  Orders </th><td class=""><strong class=""> <?php echo e($orders->order_carts[0]->pivot->total_qty); ?> </strong></td></tr>


                            </table>
                       <div class="row jumbotron">
                      <strong>Order Products</strong>
                       </div>  
<?php $__currentLoopData = $orders->order_carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<strong>Item <?php echo e($loop->iteration); ?></strong>
<div class="row box">
<div class="col-md-6">
  <ul class="list-group">
      <li class="list-group-item">Product Name<strong class="pull-right"><?php echo e($items->name); ?></strong></li>
      <li class="list-group-item">Product Price<strong class="pull-right"><?php echo e($items->rate); ?></strong></li>
      <li class="list-group-item">Product Qty<strong class="pull-right"><?php echo e($items->pivot->qty); ?></strong></li>

  </ul>
</div>
<div class="col-md-6">
    <section class="orderss text-center" style="display:inline-block; margin-left:30px;">

      
        <div class="orders-card">
      
          <div class="orders-image">
            <img src="<?php echo e(asset($items->pivot->images)); ?>" width="100" height="100" style="margin:20px;">
          </div>
        
        </div>
      

      
      </section>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>




















                 
       <div class="row">
     
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
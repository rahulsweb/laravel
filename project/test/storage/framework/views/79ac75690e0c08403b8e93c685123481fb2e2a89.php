



<?php $__env->startPush('scripts'); ?> 

<!-- jQuery 3 -->

<script>
  $(function () {
    $('#example2').DataTable();
   
  });
</script>

<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 
  <!-- Main content -->
  <section class="content ">

 
                <div class="row">
          
        
                    <div class="col-md-12 ">
   
   
   <div class="box">
            <div class="box-header">
            <strong style="font-size:30px;" class="box-title text-success ">order Managment</strong>
            </div>
            <!-- /.box-header -->


                   <form method="GET" action="<?php echo e(url('/admin/order')); ?>" accept-charset="UTF-8" class="form-inline pull-right px-2 " role="search">
                            <div class="input-group" style="margin-right:10px;">
                              <li  style="list-style-type:none;">  <input type="text" class="form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                                </li>
                            </div>
                        </form>
          
            <div class="box-body">
            
         
            
  

                  

                              <br>
                              <br>
                              <?php if($message = Session::get('flash_message')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong class="text-center"><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


                                <div class="table-responsive">
                                
                                    <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="alert alert-info">
                                       <th>#</th> <th>Order Code</th><th>name</th><th>Status</th><th>Qty</th><th>Total</th><th>Date</th><th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                           <td><?php echo e($loop->iteration); ?></td> 
                        
                                        <td> <?php echo e($item->order_code); ?></td>
                                        <td> <?php echo e($item->users->first_name." ".$item->users->last_name); ?></td>
                                        <td>  <?php echo e($item->orderPayment[0]->status); ?></td>
                                        <td>   <?php echo e($item->order_carts[0]->pivot->total_qty); ?> </td>
                                        <td> <?php echo e($item->order_carts[0]->pivot->total_cart); ?></td>
                                               <td> <?php echo e($item->log_order->last()->created_at); ?></td>
                                         
                                        <td>
                                                <a href="<?php echo e(url('/admin/order/' . $item->id)); ?>" title="View Coupon"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="<?php echo e(url('/admin/order/' . $item->id . '/edit')); ?>" title="Edit Coupon"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    
                                              
                                     
                                            </td>
                                    </tr>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
     
                                                <div class="pagination-wrapper"> <?php echo $orders->appends(['search' => Request::get('search')])->render(); ?> </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    
    
    </section>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('theme.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
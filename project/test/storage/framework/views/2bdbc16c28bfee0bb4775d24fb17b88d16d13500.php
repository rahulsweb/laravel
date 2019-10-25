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
  <section class="content" >

 
                <div class="row">
          
        
                    <div class="col-md-12 ">
   
   
   <div class="box">
            <div class="box-header">
            <strong style="font-size:30px;" class="box-title text-success ">Customer Register Reports</strong>
            </div>
          


             <form method="GET" action="<?php echo e(url('/admin/customers')); ?>" accept-charset="UTF-8" class="form-inline pull-right px-2 " role="search">
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


<?php if(app('request')->input('search') && app('request')->input('page')): ?>
<div class="container">      
		<a href="<?php echo e(url('customer/xls', [app('request')->input('search'),app('request')->input('page') ])); ?>"><button class="btn btn-success">Download Excel xls</button></a>
		
		<a href="<?php echo e(url('customer/csv',app('request')->input('search'))); ?>"><button class="btn btn-success">Download CSV</button></a>
		<br><br>
	</div>
<?php endif; ?>



<?php if(app('request')->input('page') && !app('request')->input('search')): ?>
   <div class="container">
            
    <a href="<?php echo e(url('customers/xls',[app('request')->input('page') ])); ?>"><button class="btn btn-success">Download Excel xls</button></a>
    
    <a href="<?php echo e(url('customers/csv',app('request')->input('page'))); ?>"><button class="btn btn-success">Download CSV</button></a>
    <br><br>
</div>
<?php endif; ?>

<?php if(app('request')->input('search') && !app('request')->input('page')): ?>
   <div class="container">
            
    <a href="<?php echo e(url('customer/xls',app('request')->input('search'))); ?>"><button class="btn btn-success">Download Excel xls</button></a>
    
    <a href="<?php echo e(url('customer/csv',app('request')->input('search'))); ?>"><button class="btn btn-success">Download CSV</button></a>
    <br><br>
</div>
<?php endif; ?>


<?php if(!app('request')->input('search') && !app('request')->input('page')): ?>
<div class="container">
            
		<a href="<?php echo e(url('customer/xls')); ?>"><button class="btn btn-success">Download Excel xls</button></a>
		
		<a href="<?php echo e(url('customer/csv')); ?>"><button class="btn btn-success">Download CSV</button></a>
		<br><br>
	</div>

    <?php endif; ?>






                                <div class="table-responsive">
                                
                                    <table  class="table table-bordered table-hover">
                                <thead>
                                    <tr class="alert alert-info">
                                      <th>#</th>
                                      <th>Name</th>
                                      <th>Email</th>    
                                      <th>Date</th><th>Order Details</th>    </tr>
                                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr>
                                         <td><?php echo e($loop->iteration); ?></td>                       

                                         <td><?php echo e($user->first_name." ".$user->last_name); ?></td>  
                                          <td><?php echo e($user->email); ?></td>                      
                                                      
                                          <td><?php echo e($user->created_at); ?></td>   
                                                                                            <td>         <a href="<?php echo e(url('admin/order/search',$user->email)); ?>" title="View Order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View Orders</button></a></td>  

                                                        
                                       </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                                                                            <div class="pagination-wrapper"> <?php echo $users->appends(['search' => Request::get('search')])->render(); ?> </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    
    
    </section>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('theme.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
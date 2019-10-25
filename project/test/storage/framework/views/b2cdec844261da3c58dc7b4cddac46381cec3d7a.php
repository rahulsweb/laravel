



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
            <strong style="font-size:30px;" class="box-title text-success ">Product Managment</strong>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
         
            
                                <a href="<?php echo e(url('/admin/product/create')); ?>" class="btn btn-success btn-md" title="Add New AdminUser">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>
  
                        <br/>
                        <br/>
                        <?php if($message = Session::get('flash_message')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr class="alert alert-info">
                                        <th>#</th><th>Name</th><th>Rate</th><th>Images</th><th>Color</th><th>Quantity</th><th>Category name</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                           
                                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><strong class="text-success"><?php echo e($item->name); ?></strong></td>
                                            <td><?php echo e($item->rate); ?></td>
                                            <td>
                                                
                                                <?php $__currentLoopData = $item->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                            
                                             <?php if(isset($image->name)): ?>
                                                <img src="<?php echo e(asset( $image->name)); ?>" width=150 height=100> 
                                                <?php else: ?>
                                                <img src="<?php echo e(asset('Product Image/not.png')); ?>" alt="Image not Avalible" width=150 height=100> 
                                                <?php endif; ?> 
                                            </td>
                                      
                                     <td> <?php echo e($item->product_attribute->color); ?></td>
                                     <td><?php echo e($item->product_attribute->quantity); ?></td>
                                  
                     
                                         
      <?php if(isset($item->categories[0]->name)): ?>
                                    <td>
                                     <strong class="text-success"> 
                                      <?php echo e($item->categories[0]->name); ?>

                                   </strong>
                                      </td> 
                                        <?php else: ?>
                                      <td>
                                                                            <strong class="text-danger"> N/A </strong>

                                      </td>  
                                 <?php endif; ?>
                                                    
                                     <td>
                                                <a href="<?php echo e(url('/admin/product/' . $item->id)); ?>" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="<?php echo e(url('/admin/product/' . $item->id . '/edit')); ?>" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <?php if (Auth::check() && Auth::user()->hasRole('admin')): ?>
                                                <form method="POST" action="<?php echo e(url('/admin/product' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <?php echo e(csrf_field()); ?>

                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
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
<!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
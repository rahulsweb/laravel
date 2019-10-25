









<?php $__env->startPush('styles'); ?> 



<style>
        img.center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }
</style>

  <!-- Google Font -->

<?php $__env->stopPush(); ?> 
       


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
            <strong style="font-size:30px;" class="box-title text-success ">Banner Management</strong>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
         
            
                                <a href="<?php echo e(url('/admin/banner/create')); ?>" class="btn btn-success btn-md" title="Add New AdminUser">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>
  

                                
                  

                              <br>
                              <br>
                              <?php if($message = Session::get('flash_message')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong class="text-center"><?php echo e($message); ?></strong>
</div>
<?php endif; ?>
                        <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr class="alert alert-info">
                                        <th>#</th><th>Name</th><th>Image</th><th>Description</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr >
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->name); ?></td><td><img class="img-responsive center img-fluid" src="<?php echo e(asset('/images/'.$item->image)); ?>" alt="NO images" border=3 height=40 width=40 style="image" ></td><td><?php echo e($item->description); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/admin/banner/' . $item->id)); ?>" title="View Banner"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/admin/banner/' . $item->id . '/edit')); ?>" title="Edit Banner"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                           

                                            <form method="POST" action="<?php echo e(url('/admin/banner' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Banner" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                    
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $banner->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    
    
    </section>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
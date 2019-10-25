
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
            <strong style="font-size:30px;" class="box-title text-success ">Email Template</strong>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
         
            
                                <a href="<?php echo e(url('/admin/email-template/create')); ?>" class="btn btn-success btn-md" title="Add New email">
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
                                                <th>#</th><th> Name</th><th>Subject</th><th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($email)): ?>
                                        <?php $__currentLoopData = $email; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><strong class="text-success"><?php echo e(ucfirst($item->name)); ?></strong></td>
                                           

                                             <td>                                            
                                                    <?php echo e($item->subject); ?>

                                               
                                                </td>
                                                     

                                               <?php if (Auth::check() && Auth::user()->hasRole('admin')): ?>
                                                <td>
                                                   
                                                    <a href="<?php echo e(url('/admin/email-template/' . $item->id)); ?>" title="View email"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="<?php echo e(url('/admin/email-template/' . $item->id . '/edit')); ?>" title="Edit email"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
                                                    <form method="POST" action="<?php echo e(url('/admin/email-template' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <?php echo e(csrf_field()); ?>

                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete email" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                    <?php endif; ?>
                                                </td>
                                   
                                                <?php endif; ?>
                                            </tr> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
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

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
  <section class="content-header">
      <h1 class="text-center alert alert-default">
       Category  Detail
      </h1>
    
    </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->

        <div class="container">
            <div class="row">
       
    
                <div class="col-md-9">
                <div class="card">
               
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin/category')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                       
                        <br/>
                        <br/>

                        <div class="table-responsive list-group-item">
                            <table id="example2" class="table table-bordered table-hover">

                            <tbody>
                                  
                                    <tr><th class="  "> Name </th><td class=""><strong class="">  <?php echo e($category->name); ?></strong> </td></tr><tr>
                                      <th class="  "> Parent Category </th><td class=""><strong class=""> <?php echo e($category->parent_id ? $category->parent['name']:'N/A'); ?></strong> </td></tr>
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
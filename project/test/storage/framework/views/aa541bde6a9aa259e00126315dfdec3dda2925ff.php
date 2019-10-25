  
 <?php $__env->startPush('styles'); ?>


 <link href="<?php echo e(asset('css/frontendProfile.css')); ?>" rel="stylesheet">

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
        

            <div class="col-md-12 ">
                            
<div class="container emp-profile">
<form method="post">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                   <?php if(isset($users->profile)): ?> 
                <img src="<?php echo e(asset($users->profile)); ?>" alt="No iMGES"/>
                <?php else: ?>
                <img src="<?php echo e(asset('User/no_image.jpeg')); ?>" alt="No iMGES"/>
                <?php endif; ?>
                <div class="file btn btn-lg btn-primary">
                          <strong>  <?php echo e(ucfirst($users->first_name)." "); ?>  <?php echo e(ucfirst($users->last_name)); ?></strong>
                    <input type="file" name="file"/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">

            
                        <h3 class="text-info"><b>
                           <?php echo e(ucfirst($users->first_name)." "); ?>  <?php echo e(ucfirst($users->last_name)); ?>

                        </b> </h3>
                        <h6>
                            Web Developer and Designer
                        </h6>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="col-md-2">
            <a href="<?php echo e(url('profile/'.$users->id. '/edit')); ?>"  class="profile-edit-btn btn btn-lg">Edit Profile</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
           
        </div>
        <div class="col-md-8">  
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo e($users->id); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo e($users->first_name." "); ?>  <?php echo e($users->last_name); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo e($users->email); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>123 456 7890</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Web Developer and Designer</p>
                                </div>
                            </div>
                </div>
             
            </div>
        </div>
    </div>
</form>           
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
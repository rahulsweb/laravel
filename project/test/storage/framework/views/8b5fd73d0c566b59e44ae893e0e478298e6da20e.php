  
 <?php $__env->startPush('styles'); ?>

 <link href="<?php echo e(asset('css/frontendProfile.css')); ?>" rel="stylesheet">


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
           


                 
                <div class="col-md-12 ">
                                  <form method="POST" action="<?php echo e(url('profile/'.$users->id)); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                           
                        <div class="container emp-profile">
                       
                            <div class="row">
                                <div class="col-md-4">
                              
                                    <div class="profile-img">
                                            <?php if(isset($users->profile)): ?> 
                                            <img src="<?php echo e(asset($users->profile)); ?>" alt="No iMGES"/>
                                            <?php else: ?>
                                            <img src="<?php echo e(asset('User/no_image.jpeg')); ?>" alt="No iMGES"/>
                                            <?php endif; ?>
                                        <div class="file btn btn-lg btn-primary">
                                            Change Photo
                                            <input type="file" name="profile"/>
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
                                        <a href="<?php echo e(url('profile')); ?>"  class="profile-edit-btn btn btn-lg">Profile</a>
                                    </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                   
                                </div>
                                <div class="col-md-8">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <div class=" active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                   

                

                            <?php echo $__env->make('frontend.profile.form', ['formMode' => 'edit'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                   

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

<?php echo $__env->make('frontend_theme.frontend_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
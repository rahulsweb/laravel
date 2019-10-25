  
 <?php $__env->startPush('styles'); ?>
<style>
.fa {
  font-size: 1.5em;
  line-height: 0.75em;
  vertical-align: -15%;
}

</style>
<?php $__env->stopPush(); ?>
 <?php $__env->startSection('content'); ?>
<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="login-form">
                    <!--login form-->
                    <?php if($message = Session::get('login')): ?>
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong class="text-center"><?php echo e($message); ?></strong>
        <?php echo e(Session::forget('login')); ?>

</div>
<?php endif; ?>  
                    <?php if(Session::has('register')): ?>
                    <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('register')); ?></p>
                    <?php endif; ?>
                
                    <h2>Login to your account</h2>
                  
                </div>
                <!--/login form-->
                <div class="panel-body" id="msg">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                              <strong class="text-light" >  <?php echo e(session('error')); ?></strong>
                              <?php echo e(session()->forget('error')); ?>

                            </div>
                        <?php endif; ?>
    
                    </div>
 
         
                <div class="signup-form">
               
                    
                    <form class="form-horizontal" method="POST" action="<?php echo e(url('login')); ?>">
                        <ul class="list-group">
                           <li class="list-group-item">
                           <a href="<?php echo e(url('login/github')); ?>" class="btn btn-lg" title="github login" ><i class="fa fa-github" aria-hidden="true"></i></a>
                           <a href="<?php echo e(url('auth/google')); ?>" class="btn btn-lg" ><i class="fa fa-google-plus" title="google login"></i></a></li>
                         </ul>
                            <?php echo e(csrf_field()); ?>








                                <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                                   
                                    <input class="form-control" name="email" placeholder="Email-Id" type="text" id="email" value="<?php echo e(isset($adminuser->email) ? $adminuser->email : ''); ?>" >
                                    <?php echo $errors->first('email', '<strong class="help-block">:message</strong>'); ?>

                                </div>
                                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                                   
                                    <input class="form-control" name="password" type="text" id="password" placeholder="Password" value="<?php echo e(isset($adminuser->password) ? $adminuser->password : ''); ?>" >
                                    <?php echo $errors->first('password', '<strong class="help-block">:message</strong>'); ?>

                                </div>
                              


                                    <div class="form-group">
                                            <input class="btn-lg btn-success text-muted" style="background-color:orange;" type="submit" value="Login">
                                       
                                             <a class="btn btn-link" href="<?php echo e(url('email')); ?>">
                                    Forgot Your Password?
                                </a>
                                        </div>
                                       

                    </form>
                </div>
            </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->
<?php $__env->startPush('scripts'); ?> 


<?php $__env->stopPush(); ?>

<?php echo $__env->make('theme.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
        $(document).ready(function(){
   
            setTimeout(function() {
                $('#msg').fadeOut('fast');
            }, 4000);
        });
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend_theme.frontend_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!DOCTYPE html>

<html>
<head>
  <title>
    Admin Panel
  </title>
<?php echo $__env->make('theme.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body class="hold-transition login-page">
<div class="login-box">
        <div class="login-logo">
          <a href="#"><b>Admin </b>Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
                <div class="panel-body" id="msg">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                              <strong class="text-light  " >  <?php echo e(session('error')); ?></strong>
                              <?php echo e(session()->forget('error')); ?>

                            </div>
                        <?php endif; ?>
    
                    </div>
          <p class="login-box-msg">Sign in to start your login</p>
          <form class="form-horizontal" method="POST" action="<?php echo e(route('login.custom')); ?>">
                <?php echo e(csrf_field()); ?>  
            <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" name="password" required>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row col-xs-offset-1">
              <div class="col-xs-6">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
      
          <!-- /.social-auth-links -->
      
     
      
        </div>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    
    
    
    <?php echo $__env->make('theme.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script>
            $(document).ready(function(){
               
                setTimeout(function() {
                    $('#msg').fadeOut('fast');
                }, 4000);
            });
        </script>
    </body>
    </html>
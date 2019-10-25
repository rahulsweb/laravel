<div class="form-group <?php echo e($errors->has('first_name') ? 'has-error' : ''); ?>">
    <label for="first_name" class="control-label"><?php echo e('First Name'); ?></label>
    <input class="form-control" name="first_name" type="text" id="first_name" value="<?php echo e(isset($adminuser->first_name) ? $adminuser->first_name : ''); ?>" >
    <?php echo $errors->first('first_name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('last_name') ? 'has-error' : ''); ?>">
    <label for="last_name" class="control-label"><?php echo e('Last Name'); ?></label>
    <input class="form-control" name="last_name" type="text" id="last_name" value="<?php echo e(isset($adminuser->last_name) ? $adminuser->last_name : ''); ?>" >
    <?php echo $errors->first('last_name', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
    <label for="email" class="control-label"><?php echo e('Email'); ?></label>
    <input class="form-control" name="email" type="text" id="email" value="<?php echo e(isset($adminuser->email) ? $adminuser->email : ''); ?>" >
    <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
    <label for="password" class="control-label"><?php echo e('Password'); ?></label>
    <input class="form-control" name="password" type="text" id="password" }"    >
    <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('confirm_password') ? 'has-error' : ''); ?>">
        <label for="confirm_password" class="control-label"><?php echo e('Confirm Password'); ?></label>
        <input class="form-control" name="confirm_password" type="text" id="confirm_password" value="<?php echo e(isset($adminuser->confirm_password) ? $adminuser->confirm_password : ''); ?>" >
        <?php echo $errors->first('confirm_password', '<p class="help-block">:message</p>'); ?>

    </div>
<div class="form-group <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">


     <label for="status" class="control-label">Status</label>

                  <div class="checkbox">
                    <strong class="text-success active">
    <input    name="status" type="radio" id="status" value="<?php echo e(isset($adminuser->status) ? $adminuser->status : 'Active'); ?>"     checked>

                     Active
                    </strong>
                  </div>

                  <div class="checkbox">
                    <strong class="text-danger">

    <input   name="status" type="radio" id="status" value="<?php echo e(isset($adminuser->status) ? $adminuser->status : 'InActive'); ?>"     >
                InActive
                    </strong>
                  </div>

                  
           
    <?php echo $errors->first('status', '<p class="help-block">:message</p>'); ?>

</div>


 <div class="form-group <?php echo e($errors->has('roles') ? 'has-error' : ''); ?>">
      <strong>Roles</strong>
                  <select class="form-control" name="roles">
                      <?php if(isset($adminuser->roles )): ?>
                        <?php $__currentLoopData = $adminuser->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->name); ?>"><?php echo e(isset($value->name) ? $value->name : 'Select Roles'); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                         <option value=" "><?php echo e('Select Roles'); ?></option>
                        <?php endif; ?> 
                  <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                  </select>
                 <?php echo $errors->first('roles', '<p class="help-block">:message</p>'); ?>

                </div>

<div class="form-group">
    <input class="btn-lg btn-success" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>


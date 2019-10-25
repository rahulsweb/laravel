<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label text-danger"><?php echo e('name'); ?></label>
    <input class="form-control " name="name" type="text" id="name" value="<?php echo e(isset($role->name) ? $role->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('permission') ? 'has-error' : ''); ?>">
    <label for="permission" class="control-label text-info"><?php echo e('Permissions'); ?></label>



    <?php echo $errors->first('permission', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group">


    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(isset($rolePermissions)): ?>
        <label class="text-success"><?php echo e(Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name'))); ?>

        <?php echo e($value->name); ?></label>
        <?php else: ?>
        <label class="text-success"><?php echo e(Form::checkbox('permission[]', $value->id, false, array('class' => 'name'))); ?>

            <?php echo e($value->name); ?></label>
            <?php endif; ?>
    <br/>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>

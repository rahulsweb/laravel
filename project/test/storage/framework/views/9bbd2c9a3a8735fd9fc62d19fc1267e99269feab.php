
<div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <label for="title" class="control-label"><?php echo e('Title'); ?></label>
    <input class="form-control" name="title" type="text" id="title" value="<?php echo e(isset($coupon->title) ? $coupon->title : ''); ?>" >
    <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('code') ? 'has-error' : ''); ?>">
    <label for="code" class="control-label"><?php echo e('code'); ?></label>
    <input class="form-control" name="code" type="text" id="code" value="<?php echo e(isset($coupon->code) ? $coupon->code : ''); ?>" >
    <?php echo $errors->first('code', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('type') ? 'has-error' : ''); ?>">
    <label for="type" class="control-label"><?php echo e('type'); ?></label>
    <input class="form-control" name="type" type="text" id="type" value="<?php echo e(isset($coupon->type) ? $coupon->type : ''); ?>" >
    <?php echo $errors->first('type', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('discount') ? 'has-error' : ''); ?>">
    <label for="discount" class="control-label"><?php echo e('discount'); ?></label>
    <input class="form-control" name="discount" type="text" id="discount" value="<?php echo e(isset($coupon->discount) ? $coupon->discount : ''); ?>" >
    <?php echo $errors->first('discount', '<p class="help-block">:message</p>'); ?>

</div>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>

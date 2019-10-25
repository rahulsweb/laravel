<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($banner->name) ? $banner->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>

<?php if(isset($banner->image)): ?>
    <input type="hidden" id="b_image" name="b_image" value="<?php echo e(isset($banner->image) ? $banner->image : ''); ?>" >
    <?php endif; ?>					
<div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">
    <label for="image" class="control-label"><?php echo e('Image'); ?></label>
    <input class="form-control" name="image" type="file" id="image" value="<?php echo e(isset($banner->image) ? $banner->image : ''); ?>" >
    <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
    <label for="description" class="control-label"><?php echo e('Description'); ?></label>
    <input class="form-control" name="description" type="text" id="description" value="<?php echo e(isset($banner->description) ? $banner->description : ''); ?>" >
    <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>

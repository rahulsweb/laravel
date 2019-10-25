<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input data-parsley-trigger="keyup" required  data-parsley-pattern="^[A-Za-z ]*$" data-parsley-rangelength="[9,50]"          data-parsley-required-message="Name is required Field"           class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($content->name) ? $content->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <label for="title" class="control-label"><?php echo e('title'); ?></label>
    <input data-parsley-trigger="keyup" required   data-parsley-pattern="^[A-Za-z ]*$"  data-parsley-required-message="Title is required" class="form-control" name="title" type="text" id="title" value="<?php echo e(isset($content->title) ? $content->title : ''); ?>" >
    <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('slug') ? 'has-error' : ''); ?>">
    <label for="slug" class="control-label"><?php echo e('slug'); ?></label>
    <input class="form-control" data-parsley-trigger="keyup" required   data-parsley-pattern="^[A-Za-z-]*$" data-parsley-required-message="Slug is required" name="slug" type="text" id="slug" value="<?php echo e(isset($content->slug) ? $content->slug : ''); ?>" >
    <?php echo $errors->first('slug', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('content') ? 'has-error' : ''); ?>">
    
    <label for="title" class="control-label"><?php echo e('content'); ?></label>
     
            <textarea data-parsley-required-message="Content is required" id="content" name="content" rows="10" cols="80"  required   value="<?php echo e(isset($content->content) ? $content->content : ''); ?>">
                <?php echo e(isset($content->content) ? $content->content : ''); ?>

            </textarea>
 <?php echo $errors->first('content', '<p class="help-block">:message</p>'); ?>

  </div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>

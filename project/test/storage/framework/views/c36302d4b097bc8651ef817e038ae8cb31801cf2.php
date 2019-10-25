<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label">Create Category <?php echo e('Name'); ?></label>
    <input class="form-control" name="name" placeholder="Category Name" type="text" id="name" value="<?php echo e(isset($category->name) ? $category->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group">
    <label> Category Name</label>
    <select class="form-control" name="parent_id">
      <option value="<?php echo e(isset($category->parent->id) ? $category->parent->id : 0); ?>"><?php echo e(isset($category->parent->id) ? $category->parent->name : 'Select Category'); ?></option>
  
     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if(!$item->parent): ?>
     <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
     <?php endif; ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div> 

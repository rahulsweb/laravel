<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($product->name) ? $product->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('rate') ? 'has-error' : ''); ?>">
    <label for="rate" class="control-label"><?php echo e('rate'); ?></label>
    <input class="form-control" name="rate" type="text" id="rate" value="<?php echo e(isset($product->rate) ? $product->rate : ''); ?>" >
    <?php echo $errors->first('rate', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('color') ? 'has-error' : ''); ?>">
    <label for="color" class="control-label"><?php echo e('Color'); ?></label>
    <input class="form-control" name="color" type="text" id="color" value="<?php echo e(isset($product->product_attribute->color) ? $product->product_attribute->color : ''); ?>" >
    <?php echo $errors->first('color', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('quantity') ? 'has-error' : ''); ?>">
    <label for="quantity" class="control-label"><?php echo e('Quantity'); ?></label>
    <input class="form-control" name="quantity" type="text" id="quantity" value="<?php echo e(isset($product->product_attribute->quantity) ? $product->product_attribute->quantity : ''); ?>" >
    <?php echo $errors->first('quantity', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">
    <label for="image" class="control-label"><?php echo e('Image'); ?></label>
    <input class="form-control" name="image[]" type="file" id="image" multiple=true value="<?php echo e(isset($product->product_image->name) ? $product->product_image->name : ''); ?>" >
    <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

    <?php if(isset($product->product_image)): ?>
    <div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">  
        <div class="row">
            		
   <?php $__currentLoopData = $product->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="col-md-2" style="margin:20px;">
     
       <a href="<?php echo e(url('/image/delete',$image->id)); ?>">  <button type="button" class="close"  > ×</button>	</a>
   <img src="<?php echo e(asset($image->name)); ?>" width=100 height=50>    
          </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
</div>
    <?php endif; ?>

</div>
<div class="form-group">
    <label> Category Name</label>

    <select class="form-control" name="category" id="category">
      <option value="<?php echo e(isset($product->categories[0]->parent->name) ? $product->categories[0]->parent->id : ''); ?>"><?php echo e(isset($product->categories[0]->parent->name) ? $product->categories[0]->parent->name : 'Select Category'); ?></option>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
  <?php if(!$item->parent): ?>
     <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
     <?php endif; ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">

        <label> Sub Category Name</label>
        <select class="form-control" name="subcategory" id="subcategory">
          <option value="<?php echo e(isset($product->categories[0]->id) ? $product->categories[0]->id : ''); ?>"><?php echo e(isset($product->categories[0]->parent->name) ? $product->categories[0]->name : 'Select Sub Category'); ?></option>
           <?php if(isset($item->parent) && $item->parent): ?>
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
         <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
     
    
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php endif; ?>
    </div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>

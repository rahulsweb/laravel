



<div class="row">
     
</div>


<div class="features_items">




    <!--features_items-->
        <h2 class="title text-center">Features Items</h2>
      
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
       
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                            <?php $__currentLoopData = $product->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset($image->name)); ?>"   class="img-fluid"  alt=""   height="200" />      

                        <h2>$<?php echo e($product->rate); ?></h2>
                        <p><strong class="text-info"><?php echo e($product->name); ?></strong></p>
                        
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>$<?php echo e($product->rate); ?></h2>
                            <p><?php echo e($product->name); ?></p>
                            <a href="<?php echo e(url('cart/detail',$product->id)); ?>" class="btn btn-default add-to-cart" <?php echo e(isset($carts[$product->id]) ? 'disabled':''); ?> ><i class="fa fa-shopping-cart"></i><?php echo e(isset($carts[$product->id]) ? 'Alreary in Cart':'Add To Cart'); ?></a>
                        </div>
                    </div>
                </div>
     
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                    
                        <li>
                            
                                <form action="<?php echo e(url('wishlist/add')); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="wish" value="<?php echo e($product->id); ?>" >
                            <button type="submit"   id="wishlist"><i class="fa fa-plus-square" ></i>Add to wishlist</button>
                        
                        </form></li>
                   
            
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                </div>
        
            </div>
        </div>
    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

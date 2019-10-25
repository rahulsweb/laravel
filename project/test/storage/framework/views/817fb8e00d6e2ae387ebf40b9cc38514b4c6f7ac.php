 
<?php $__env->startPush('styles'); ?>

<style>
  .header
   {
       font-size: 20px;
       text-align: center !important;
   }
</style>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>



<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>



  <?php if(isset($message)): ?>
        <strong class="text-center"><?php echo e($message); ?></strong>
        <?php endif; ?>
        <div class="table-responsive cart_info">

       
         
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                            <td class="image">name</td>
                            <td class="description">Price</td>
                        <td class="image">image</td>
                        <td class="image"></td>
                        <td class="image"></td>
          
                      
                       
                    </tr>
                </thead>
                <tbody>
<?php if(count($products->first()->users)): ?>
                    
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  

                        <?php if(count($product->users)): ?>
                       
                    <tr>
                        
                       <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->rate); ?></td>
                        <td> <img src="<?php echo e(asset($product->product_image[0]->name)); ?>" width=100 height=100 ></td>      
                        <td>                            <a href="<?php echo e(url('cart/detail',$product->id)); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </td>
                        <td>
                         
                               <a class="btn btn-warning add-to-cart" href="<?php echo e(url('wishlist/delete', $product->id)); ?>"  >  Delete  </a>                        </td>
                    </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr >
                    <td class="text-danger" colspan="5"> <strong><h1 class="text-center">WishList Is Empty</strong></td>
                </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->



<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?> 

<script>

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontend_theme.frontend_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
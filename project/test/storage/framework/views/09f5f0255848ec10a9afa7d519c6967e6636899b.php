 
	<?php $__env->startSection('content'); ?>
	<section>
		<div class="container">
			<div class="row">

				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo e(asset($products->product_image[0]->name)); ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
											
										 	<?php $__currentLoopData = $products->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="item <?php echo e($key == 0 ? ' active' : ''); ?>">
								
												 <a href=""><img src="<?php echo e(asset($image->name)); ?>" width="200" height="200" alt=""></a>
									
										</div>
									
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
		
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo e($products->name); ?></h2>
								<p>Web ID: 1089772</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
							
									<span><?php echo e($products->rate); ?></span>
									<label>Quantity:</label>
									<input type="text" value="3" />

																	 <a href="<?php echo e(url('cart/detail',$products->id)); ?>" class="btn btn-fefault cart add-to-cart" <?php echo e(isset($carts[$products->id]) ? 'disabled':''); ?> ><i class="fa fa-shopping-cart"></i><?php echo e(isset($carts[$products->id]) ? 'Alreary in Cart':'Add To Cart'); ?></a>

								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				
					
					
				</div>
			</div>
		</div>
	</section>
	<?php $__env->stopSection(); ?>
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php echo $__env->make('frontend_theme.frontend_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
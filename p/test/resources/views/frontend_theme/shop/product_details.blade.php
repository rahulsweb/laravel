@extends('frontend_theme.frontend_layout') 
	@section('content')
	<section>
		<div class="container">
			<div class="row">

				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{ asset($products->product_image[0]->name) }}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
											
										 	@foreach ($products->product_image as $key => $image )
										<div class="item {{ $key == 0 ? ' active' : '' }}">
								
												 <a href=""><img src="{{ asset($image->name) }}" width="200" height="200" alt=""></a>
									
										</div>
									
												@endforeach
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
								<h2>{{$products->name}}</h2>
								<p>Web ID: 1089772</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
							
									<span>{{$products->rate}}</span>
									<label>Quantity:</label>
									<input type="text" value="3" />

																	 <a href="{{ url('cart/detail',$products->id) }}" class="btn btn-fefault cart add-to-cart" {{ isset($carts[$products->id]) ? 'disabled':''  }} ><i class="fa fa-shopping-cart"></i>{{ isset($carts[$products->id]) ? 'Alreary in Cart':'Add To Cart'  }}</a>

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
	@endsection
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
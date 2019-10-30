



<div class="row">
     
</div>


<div class="features_items">


  
    <!--features_items-->
        <h2 class="title text-center">Features Items</h2>
    @if(count($products) < 1 )     
    <h2 align="center" class="text-danger"><b>Product Not Found</b></h2>
    @endif

        @foreach ($products as $key => $product)
 
       
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                            @foreach ($product->product_image as $image)
                      
                        @endforeach
                        <img src="{{ asset($image->name) }}"   class="img-fluid"  alt=""   height="200" />      

                        <h2>${{ $product->rate }}</h2>
                        <p><strong class="text-info">{{ $product->name }}</strong></p>
                        
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>${{ $product->rate }}</h2>
                            <p>{{ $product->name }}</p>
                            <a href="{{ url('cart/detail',$product->id) }}" class="btn btn-default add-to-cart" {{ isset($carts[$product->id]) ? 'disabled':''  }} ><i class="fa fa-shopping-cart"></i>{{ isset($carts[$product->id]) ? 'Alreary in Cart':'Add To Cart'  }}</a>
                        </div>
                    </div>
                </div>
     
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                    
                        @if(isset(auth()->user()->id))
                        <li>
                            
                                <form action="{{ url('wishlist/add') }}" method="POST">
                                        {{ csrf_field() }}
                                    <input type="hidden" name="wish" value="{{ $product->id }}" >
                            <button type="submit"   id="wishlist"><i class="fa fa-plus-square" ></i>Add to wishlist</button>
                                    
                        </form></li>
                        @else
                        <li>
                            
                     
                            <button type="submit"  onclick="return false"  id="wishlist"><i class="fa fa-plus-square" ></i>Add to wishlist</button>
                                    
                    
                        @endif
                   
                        @if( isset($carts[$product->id]))
                        <li><a href=""  onclick="return false"><i class="fa fa-plus-square"></i>Already In  Cart</a></li>
                        @else
                        <li><a href="{{ url('cart/detail',$product->id) }}"  ><i class="fa fa-plus-square"></i>Add To Cart</a></li>
                     @endif                        
                    </ul>
                </div>
        
            </div>
        </div>
    
        @endforeach
    </div>

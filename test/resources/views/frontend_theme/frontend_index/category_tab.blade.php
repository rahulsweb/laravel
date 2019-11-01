
 
<div class="category-tab">
        <!--category-tab-->
        <div class="col-sm-12" >
            <ul class="nav nav-tabs">
                @foreach ($sub_category as $key => $value )
                <li class="{{ $key == 0 ? ' active' : '' }}"><a href="#{{$value->name}}" class="category_tab" data-toggle="tab"  name="{{ $value->id }}">{{ $value->name }}</a></li>
              @endforeach
                
              
               
            </ul>
        </div>
       
        <div class="tab-content">
                @foreach ($sub_category as $key => $value )
       
            <div class="tab-pane fade  {{ $key == 0 ? ' active' : '' }}  in" id="{{$value->name}}">
                
         <div class="row col-sm-12" id="sub_categories">
                   <div class="p">
            @foreach ($sub_category_product as $products)
       
      
                    <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img id="image" src="{{ asset( $products->product_image[0]->name) }}" alt=""  class="img-fluid"  alt=""   height="150" />
                                        <strong>{{ $products->name }}</strong>
                                        <h2 id="rate">{{ $products->rate }}</h2>
                                        <p></p>
                                  
                                      
                                                    @if(isset(Session::get('cart')->items[$products->id]))
                                                    <a href=""  class="btn btn-default add-to-cart" onclick="return false"><i class="fa fa-plus-square"></i>Already In  Cart</a>
                                         @else
                                         <a href="{{ url('cart/detail',$products->id) }}"  class="btn btn-default add-to-cart" ><i class="fa fa-plus-square"></i>Add To Cart</a>
                                      @endif    
                                     
                                        
                                    </div>
                                </div>
                                <?php 
                                /*
                                <div class="sub">
                                        <ul class="nav nav-pills nav-justified">
                                        
                                            @if(isset(auth()->user()->id))
                                            <li>
                                                
                                                    <form action="{{ url('wishlist/add') }}" method="POST">
                                                            {{ csrf_field() }}
                                                        <input type="hidden" name="wish" value="{{ $value->id }}" >
                                                <button type="submit"   id="wishlist"><i class="fa fa-plus-square" ></i>Add to wishlist</button>
                                                        
                                            </form></li>
                                            @else
                                            <li>
                                                
                                         
                                                <button type="submit"  onclick="return false"  id="wishlist"><i class="fa fa-plus-square" ></i>Add to wishlist</button>
                                                        
                                        
                                            @endif
                                       
                                            @if( isset($carts[$value->id]))
                                            <li><a href=""  onclick="return false"><i class="fa fa-plus-square"></i>Already In  Cart</a></li>
                                            @else
                                            <li><a href="{{ url('cart/detail',$value->id) }}"  ><i class="fa fa-plus-square"></i>Add to Cart</a></li>
                                         @endif                        
                                        </ul>
                                    </div>
                                    */
                                    ?>
                            </div>
                    
                            
                        </div>
                
         
                  
            @endforeach
        </div>
        <div class="new_p">
            </div>
            </div>
            
            </div>
       @endforeach
   
        </div>

    </div>





  
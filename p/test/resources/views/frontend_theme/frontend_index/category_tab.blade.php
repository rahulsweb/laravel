

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
           <div id="p">    
            @foreach ($sub_category_product as $products)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                    
                            <img id="image" src="{{ asset( $products->product_image[0]->name) }}" alt=""  class="img-fluid"  alt=""   height="150" />
                            <strong>{{ $products->name }}</strong>
                            <h2 id="rate">{{ $products->rate }}</h2>
                            <p></p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                       
                        
                        
                        </div>

                    </div>
                </div>
                
            </div>
            @endforeach
        </div> 
            </div>
              
            </div>
       @endforeach
   
        </div>

    </div>





  
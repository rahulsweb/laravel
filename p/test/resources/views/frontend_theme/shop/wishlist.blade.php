@extends('frontend_theme.frontend_layout') 
@push('styles')

<style>
  .header
   {
       font-size: 20px;
       text-align: center !important;
   }
</style>

@endpush
@section('content')



<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>



        @if ($message = Session::get('message'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong class="text-center">{{ $message }}</strong>
        </div>
        @endif
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
                      
        
                        @if(isset($wishlist->first()->products))
                    
                        @foreach($wishlist as $key => $product)
                
                        @if(count($product->users))
                       
                    <tr>
                        
                       <td><strong>{{ $product->products->name }}</strong></td>
                        <td><strong>{{ $product->products->rate }}</strong></td>
                        <td> <img src="{{ asset($product->product_image->name) }}" width=100 height=100 ></td>      
                        <td>                     
                            
                        
                                @if( Session::has('cart'))
                                <a href=""  onclick="return false" class="btn btn-warning add-to-cart"><i class="fa fa-plus-square"></i>Already In  Cart</a>
                                @else    
                                <a href="{{ url('cart/detail',$product->products->id) }}" class="btn btn-warning add-to-cart"  ><i class="fa fa-plus-square"></i>Add To Cart</a>
                             @endif          
                            
                       
                            
                        </td>
                        <td>
                         
                               <a class="btn btn-warning add-to-cart" href="{{ url('wishlist/delete', $product->products->id) }}"  >  Delete  </a>                        </td>
                    </tr>
                        @endif
                    @endforeach   
                   @else
                 <tr>
                    <td class="text-danger" colspan="5"> <strong><h1 class="text-center">WishList Is Empty</strong></td>
                </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->



@endsection

@push('scripts') 

<script>

</script>
@endpush
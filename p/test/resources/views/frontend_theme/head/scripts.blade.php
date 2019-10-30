  
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{asset('datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/parsley.js') }}"></script> 



<script src="{{asset('datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>


<script>
        $(document).ready(function(){
         
          $('.category_tab').click(function(){
        
           var  id=$(this).attr('name');
           $.ajax({
            type:'POST',
            url:"{{ route('sub_category.product') }}",
            data:{'_token':"{{ csrf_token() }}",'id':id},
            success:function(data) {
               $('#p').remove();
               var str="";
                $.each( data, function  ( key, value ) {
                
                    var url = "{{ url('cart/detail',1) }}";
var url = url.replace('1', value.id);


                            str+=' <div class="col-sm-3">';
                            str+=' <div class="product-image-wrapper">';
                                    str+='<div class="single-products">'; 
                                            str+='<div class="productinfo text-center">';
                                                    str+=' <img id="image" src="'+value.product_image[0].name+'" alt="" />';
                                                    str+='<strong id="rate">'+value.name+'</strong>';
                                                    str+='<h2 id="rate">'+value.rate+'</h2>';
                                                   
                                                   
                                                    str+=' <a href="'+url+'" class="btn btn-default add-to-cart" {{ isset($carts['+value.id+']) ? "disabled":""  }} >';
                                                        
                                                        str+=  '<i class="fa fa-shopping-cart"></i>Add to cart</a>';
                                                    str+=' </div>';
                                                    str+=' </div>';  
                                                    str+=' </div>';
                                                    str+=' </div>';
                                               

  
               
            });
          
            $('.sub_categories').append(str);
        }
         });
        
        });
        
    });     
        
        </script>
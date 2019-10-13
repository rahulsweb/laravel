@extends('frontend_theme.frontend_layout')   
    
  @section('content')  
    @include('frontend_theme.frontend_index.slider')
   

    <section>
            <div class="container">
                <div class="row">
                   
                      @include('frontend_theme.frontend_index.left_side')
                   
    
                    <div class="col-sm-9 padding-right">
                     @include('frontend_theme.frontend_index.subcategory_item')
                        <!--features_items-->
    
                        @include('frontend_theme.frontend_index.category_tab')
                        <!--/category-tab-->
    {{--  
                        @include('frontend_theme.frontend_index.recommended_items')
                        <!--/recommended_items-->  --}}
    
                    </div>
                </div>
            </div>
        </section>

    @endsection 
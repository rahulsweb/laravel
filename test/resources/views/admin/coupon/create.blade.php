@extends('theme.layout')



@push('styles') 

<style>
.text-large
{
  font-size: 2em;
  text-align:center !important;
}
</style>

@endpush 
       
@push('scripts')  
 <script>
    $(document).ready(function(){
      $('#coupon_form').parsley();
      setTimeout(function() {
          $('#message').fadeOut('fast');
      }, 4000);
  });
 </script>

@endpush

@section('content')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <strong class=" text-large">
   Create Coupon
     
    </strong>
 
  </section>

  <!-- Main content -->
  <section class="content ">

        <div class="container">
                <div class="row">
          
        
                    <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Coupon</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/coupon') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
 
                        <form method="POST" id="coupon_form" action="{{ url('/admin/coupon') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.coupon.form', ['formMode' => 'create'])

   
                        </form>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div> 
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->





@endsection

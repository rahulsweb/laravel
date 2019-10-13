@extends('theme.layout')



@push('styles') 


@push('scripts') 




@section('content')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1 class="text-center alert alert-info">
         order Detail
        </h1>
      
      </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->
 <div class="container">
       <div class="row">
  



           <div class="col-md-12 ">
               <div class="card">
                  
                   <div class="card-body">
                 





<ul class="list-group">

<div class="row">


</div>
<li class="list-group-item" style="margin-top:30px;">
<div class="col-md-3">
<section class="orderss" >

       <h5  >Order Code :<b class="text-info pull-right">{{ $orders->order_code}}</h5> </b>
     <h5>Payment Type: <b class="text-warning pull-right">{{ $orders->orderPayment[0]->payment_type}}</b></h5>
          <h5 >Payment status: <b class="text-danger  pull-right">{{ $orders->orderPayment[0]->status}}</b></h5>
     <h5>Total Qty:<b class=" text-info pull-right">{{ $orders->order_carts[0]->pivot->qty}}</b></h5>
<h5>Total:<b class="text-danger  pull-right" >{{ "Rs ".$orders->order_carts[0]->pivot->total}}</b></h5>
  <div class="orders-card">

    <div class="orders-image">

    </div>
    <div class="orders-info">

    </div>
  </div>

  <!-- more orderss -->

</section>
</div>


@foreach ($orders->order_carts as $items )


<section class="orderss text-center" style="display:inline-block; margin-left:30px;">

  <!-- It's likely you'll need to link the card somewhere. You could add a button in the info, link the titles, or even wrap the entire card in an <a href="..."> -->

  <div class="orders-card">

    <div class="orders-image">
      <img src="{{ asset($items->pivot->images) }}" width="100" height="100">
    </div>
    <div class="orders-info">
      <strong>{{ $items->name}}</strong>
      <h6><b class="text-success">Rs {{ $items->rate}}</b></h6>
    </div>
  </div>

  <!-- more orderss -->

</section>


@endforeach

</li>


</ul>

                 
       <div class="row">
     
       </div>         
                       
                               
                             
                     
                 

                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- /.content -->
</div>

@endsection

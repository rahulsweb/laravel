@extends('theme.layout')



@push('styles') 


@push('scripts') 




@section('content')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1 class="text-center alert alert-default">
        User Detail
        </h1>
      
      </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->

        <div class="container">
            <div class="row">
       
    
                <div class="col-md-12">
                    <div class="card">
                     
                        <div class="card-body">
    
                            <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    
                            <br/>
                            <br/>
    
                            <div class="table-responsive list-group-item">
                                <table class="table">
                                    <tbody>
                                      
                                        <tr><th class="">  Name </th><td class=""><strong class=""> {{ $contactus->name }}</strong> </td></tr>

                                        <tr><th class=""> Email </th><td class=""> <strong class="">{{ $contactus->email }}</strong> </td></tr>
                                        <tr><th class=""> Contact </th><td class=""> <strong class="">{{ $contactus->contact }}</strong> </td></tr>
                                        <tr><th class=""> Subject </th><td class=""><strong class="">{{ $contactus->subject }}</strong></td></tr>

                                        <tr><th class=""> Message </th><td class=""><strong class="">{{ $contactus->message }}</strong></td></tr>
                                    </tbody>
                                </table>
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

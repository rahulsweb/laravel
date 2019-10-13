@extends('theme.layout')



@push('styles') 


@push('scripts') 




@section('content')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1 class="text-center alert alert-warning">
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
    
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th class="list-group-item">ID</th><td class="list-group-item-warning"><strong class="text-info">{{ $contactus->id }}</strong></td>
                                        </tr>
                                        <tr><th class="list-group-item">  Name </th><td class="list-group-item-warning"><strong class="text-info"> {{ $contactus->name }}</strong> </td></tr>

                                        <tr><th class="list-group-item"> Email </th><td class="list-group-item-warning"> <strong class="text-info">{{ $contactus->email }}</strong> </td></tr>
                                        <tr><th class="list-group-item"> Contact </th><td class="list-group-item-warning"> <strong class="text-info">{{ $contactus->contact }}</strong> </td></tr>
                                        <tr><th class="list-group-item"> Subject </th><td class="list-group-item-warning"><strong class="text-info">{{ $contactus->subject }}</strong></td></tr>

                                        <tr><th class="list-group-item"> Message </th><td class="list-group-item-warning"><strong class="text-info">{{ $contactus->message }}</strong></td></tr>
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

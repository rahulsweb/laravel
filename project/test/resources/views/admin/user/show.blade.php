@extends('theme.layout')



@push('styles') 


@push('scripts') 




@section('content')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <h1 class="text-center ">
        User Detail
        </h1>
      
      </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <!-- /.content-wrapper -->

        <div class="container box">
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
                                     
                                        <tr><th class="  ">  Name </th><td class=""> {{ $adminuser->first_name." ".$adminuser->last_name  }} </td></tr>

                                        <tr><th class="  "> Email </th><td class=""> {{ $adminuser->email }} </td></tr>
                                        <tr><th class=" "> Status </th><td class=""> {{ $adminuser->status }} </td></tr>
                                        <tr><th class="  "> Role </th><td class="">
                                            
                                        @foreach ($adminuser->roles as $role )
                                            {{ $role->name }}
                                        @endforeach
                                        </td></tr>

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

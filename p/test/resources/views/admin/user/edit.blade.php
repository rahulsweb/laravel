@extends('theme.layout')

@push('styles') 

 
@endpush 
       


@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 class="text-center alert alert-info">
   User Edit
    </h1>
  
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

        <div class="container">
                <div class="row">
            
        
                    <div class="col-md-9">
                        <div class="card">
                          
                            <div class="card-body">
                                <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                <br />
                                <br />
        
                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
        

                               
                                <form method="POST" action="{{ url('/admin/user/' . $adminuser->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                   {{ method_field('PUT') }}
                                  {{ csrf_field() }} 
            
                                  
        
                                    @include ('admin.user.form', ['formMode' => 'edit'])
        
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
 
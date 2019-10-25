@extends('theme.layout')
@push('scripts') 

<!-- jQuery 3 -->

<script>
  $(function () {
    $('#example2').DataTable();
   
  });
</script>

@endpush





@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 
  <!-- Main content -->
  <section class="content ">

 
                <div class="row">
          
        
                    <div class="col-md-12 ">
   
   
   <div class="box">
            <div class="box-header">
            <strong style="font-size:30px;" class="box-title text-success ">Contact Us</strong>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
         
            
                             

                                {{--  <form method="GET" action="{{ url('/admin/contact-us') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                  
                                    </div>
                                          <span class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                </form>  --}}
                  

                              <br>
                              <br>
                           
    @if ($message = Session::get('flash_message'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong class="text-center">{{ $message }}</strong>
    </div>
    @endif
                                <div class="table-responsive">
                                
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="alert alert-info">
                                                <th>#</th><th> Name</th><th>Email</th><th>Contact</th><th>Subject</th><th>Message</th><th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contactus as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><strong class="text-success">{{ ucfirst($item->name) }}</strong></td><td><strong class="text-info">{{ $item->email }}</strong></td>
                                                <td>
                                             
                                            
                                               {{$item->contact}}
                                               
                                                </td>
                                      
          <td>
                                              
                                            
                                               {{$item->subject}}
                                               
                                                </td>
                                                      <td>
                                             
                                            
                                               {{$item->message}}
                                               
                                                </td>

                                               @role('admin')
                                                <td>
                                                   
                                                    <a href="{{ url('/admin/contact-us/' . $item->id) }}" title="View contactus"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/admin/contact-us/' . $item->id . '/edit') }}" title="Edit contactus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                             @can('user-edit')
                                                    <form method="POST" action="{{ url('/admin/contact-us' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete contactus" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                </td>
                                               @endcan
                                                @endrole
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $contactus->appends(['search' => Request::get('search')])->render() !!} </div>
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

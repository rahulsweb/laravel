<!DOCTYPE html>
<html>
   <head>
      <title>
         Admin Panel
      </title>
      <head>
         @stack('styles')
         @stack('scripts')
   </head>
   @include('admin_layout.style')
   @stack('styles')
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         @include('admin_layout.header')
         @include('admin_layout.left_aside')
         @section('content')
         @show
         @include('admin_layout.footer')
         @include('admin_layout.control_aside')
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      @include('admin_layout.script')
      @stack('scripts')
   </body>
</html>
COPY TO CLIPBOARD	 SELECT ALL

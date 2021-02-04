<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.partial.head');
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
  @include('admin.partial.sidebar');
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.partial.header');
    <!-- ########## END: HEAD PANEL ########## -->
 

    <!-- ########## START: MAIN PANEL ########## -->
    @yield('admin_content')

    
     @include('admin.partial.footer');

  </body>
</html>

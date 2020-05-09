<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Font Awesome Icons -->
    @include('admin.includes.style')
  </head>
  <body
    class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"
  >
    <div class="wrapper">
      <!-- Navbar -->
      @include('admin.includes.navbar')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      @include('admin.includes.sidebar')
      

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      @include('admin.includes.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('admin.includes.script')
    <!-- jQuery -->
  </body>
</html>

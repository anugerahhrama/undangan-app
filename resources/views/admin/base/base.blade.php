<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Undang</title>

    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url ('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ url ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url ('plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ url ('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ url ('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url ('css/style.css') }}">
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      {{-- <div class="preloader flex-column justify-content-center align-items-center bg-animate">
        <img class="animation__shake" src="{{ url ('img/logo.png') }}" alt="Undang Logo" height="" width="200">
      </div> --}}

      <nav class="main-header navbar navbar-dark navbar-expand dekorasi px-3">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>

      <aside class="main-sidebar sidebar-dark-primary elevation-4 dekorasi">
        <!-- Brand Logo -->
        <a href="dashboardadmin" class="brand-link">
          <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Undang</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ url ('img/profile.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="admin" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Data Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tema" class="nav-link">
                  <i class="fa fa-images nav-icon"></i>
                  <p>Data Tema</p>
                </a>
              </li>
            </ul>
          </nav>

          <div class="logout">
            <a href="/logout">
              <button type="button" class="btn btn-block bg-gradient-danger">Logout</button>
            </a>
          </div>

          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <div class="content-wrapper">

      @yield('content')

      </div>

      <footer class="main-footer text-center">
        Dibuat dengan cinta😘
      </footer>

      <aside class="control-sidebar control-sidebar-dark dekorasi">
      </aside>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ url ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('plugins/chart.js/Chart.min.jsplugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url ('plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ url ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ url ('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ url ('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url ('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ url ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ url ('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ url ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ url ('js/adminlte.js') }}"></script>
    <script src="{{ url ('js/demo.js') }}"></script>
    <script src="{{ url ('js/pages/dashboard.js') }}"></script>
    <script src="{{ url ('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url ('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url ('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url ('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url ('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url ('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url ('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url ('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url ('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url ('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url ('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url ('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url ('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  </body>

</html>
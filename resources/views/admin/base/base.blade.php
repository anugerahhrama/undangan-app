<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>𝑼𝒊𝒏𝒗𝒊𝒕𝒆</title>
    <link rel="icon" href="{{ url('img/icon.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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

    <script src="{{ url ('//cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>
    <script src="{{ url ('https://kit.fontawesome.com/7170f40af1.js') }}" crossorigin="anonymous"></script>
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      {{-- <div class="preloader flex-column justify-content-center align-items-center bg-red">
        <img class="animation__shake" src="{{ url ('img/icon.png') }}" height="" width="200">
      </div> --}}

      <nav class="main-header navbar navbar-light navbar-expand dekorasi px-3">
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

      <aside class="main-sidebar sidebar-light-primary elevation-4 dekorasi">
        <!-- Brand Logo -->
        <a href="dashboardadmin" class="brand-link" style="text-decoration: none">
          <img src="{{ url('img/icon.png') }}" alt="" class="brand-image img-circle">
          <span class="brand-text font-weight-light name">𝑼𝒊𝒏𝒗𝒊𝒕𝒆</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              {{-- <img src="{{ url ('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image"> --}}
              <i class="bi bi-person-circle fa-2x" style="color:#f43f5e"></i>
            </div>
            <div class="info mt-2">
              <a href="#" class="d-block" style="text-decoration: none">{{ $user->nama }}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ url ('admin') }}" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Data Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('tema.index') }}" class="nav-link">
                  <i class="fa fa-images nav-icon"></i>
                  <p>Data Tema</p>
                </a>
              </li> --}}
            </ul>
          </nav>
          <hr>
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="/logout" class="nav-link">
                  <i class="fa-solid fa-right-from-bracket nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </nav>
          <hr>
          
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <div class="content-wrapper">

      @yield('content')

      </div>

      <footer class="main-footer text-center">
        Copyright&copy𝑼𝒊𝒏𝒗𝒊𝒕𝒆 2022 
      </footer>

      <aside class="control-sidebar control-sidebar-dark dekorasi">
      </aside>
    </div>

    <script src="{{ url ('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
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

    @if(\Session::has('alert'))
      <script>
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        Toast.fire({
          icon: 'success',
          title: 'Login Berhasil'
        })
      </script>
    @endif

  </body>

</html>



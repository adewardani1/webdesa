<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIDES</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('adminLTE/dist/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/summernote/summernote-bs4.min.css'); ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url('adminLTE/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="<?php echo base_url('sides/logout');?>" class="nav-link btn btn-danger text-white">Log Out</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('img/logo-desajatituju.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIDES</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url('adminLTE/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo base_url('/penduduk'); ?>" class="nav-link">
                <i class="fas fa-users"></i>
                <p>
                  Penduduk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('/berita'); ?>" class="nav-link">
                <i class="fas fa-newspaper"></i>
                <p>
                  Berita
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-lightbulb"></i>
                <p>
                  Aspirasi Warga
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <!-- /.card -->

              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
              <!-- /.card -->
              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer fixed-bottom">
      <strong>Copyright &copy; 2021 <a href="#">SIDES Jatitujuh</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

  <!-- jQuery -->
  <script src="<?php echo base_url('adminLTE/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url('adminLTE/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url('adminLTE/plugins/chart.js/Chart.min.js'); ?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url('adminLTE/plugins/sparklines/sparkline.js'); ?>"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url('adminLTE/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
  <script src="<?php echo base_url('adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url('adminLTE/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url('adminLTE/plugins/moment/moment.min.js'); ?>"></script>
  <script src="<?php echo base_url('adminLTE/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url('adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
  <!-- Summernote -->
  <script src="<?php echo base_url('adminLTE/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url('adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('adminLTE/dist/js/adminlte.js'); ?>"></script>
</body>

</html>
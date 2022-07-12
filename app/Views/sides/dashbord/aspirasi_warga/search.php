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
    <link rel="icon" href="<?php echo base_url('img/logo-desajatituju.png'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="" alt="AdminLTELogo" height="60" width="60">
        </div> -->

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
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php base_url('/sides'); ?>" class="brand-link">
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
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?php echo base_url('sides/penduduk'); ?>" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>
                                    Penduduk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('sides/content'); ?>" class="nav-link">
                                <i class="fas fa-newspaper"></i>
                                <p>
                                    Content
                                </p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="<?php echo base_url('sides/aspirasi'); ?>" class="nav-link active">
                                <i class="fas fa-lightbulb"></i>
                                <p>
                                    Aspirasi Warga
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('sides/visimisi'); ?>" class="nav-link">
                                <i class="fas fa-tasks"></i>
                                <p>
                                    Visi-Misi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('sides/kelembagaan'); ?>" class="nav-link">
                                <i class="fas fa-university"></i>
                                <p>
                                    Kelembagaan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('sides/pemerintah-desa'); ?>" class="nav-link">
                                <i class="fas fa-gavel"></i>
                                <p>
                                    Pemerintah Desa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('sides/galeri'); ?>" class="nav-link">
                                <i class="fas fa-images"></i>
                                <p>
                                    Galeri
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('sides/komentar'); ?>" class="nav-link">
                                <i class="fas fa-comment-alt"></i>
                                <p>
                                    Komentar
                                </p>
                            </a>
                        </li>
                        <?php
                        if (session()->get('level') === 'Master') { ?>
                            <li class="nav-item">
                                <a href="<?php echo base_url('sides/akun'); ?>" class="nav-link">
                                    <i class="fas fa-user-circle"></i>
                                    <p>
                                        Akun
                                    </p>
                                </a>
                            </li>
                        <?php }
                        ?>
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
                            <h1 class="m-0">Data Aspirasi Warga</h1>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm">
                                            <form action="<?php echo base_url('sides/aspirasi/search'); ?>" method="post">
                                                <select class="search form-control" id="table_search" style="width: 200px;" name="search">
                                                    <option disabled selected></option>
                                                    <?php
                                                    foreach ($namaDepan as $row) { ?>
                                                        <option value="<?php echo $row->nama_depan; ?>"><?php echo $row->nama_depan; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Nomor Hp</th>
                                                <th>Pesan</th>
                                                <th>#Di Buat</th>
                                                <th>#Di Ubah</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = null;
                                            foreach ($aspirasi as $row) {
                                                $nomor++ ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $row->nama_depan; ?></td>
                                                    <td><?php echo $row->nama_belakang; ?></td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td><?php echo $row->alamat; ?></td>
                                                    <td><?php echo $row->nomor_hp; ?></td>
                                                    <td><?php echo $row->pesan; ?></td>
                                                    <td><?php echo $row->created_at; ?></td>
                                                    <td><?php echo $row->updated_at; ?></td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a class="btn btn-danger" href="<?php echo base_url('sides/aspirasi/delete/' . $row->id); ?>">Hapus</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
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
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('adminLTE/dist/js/demo.js'); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('adminLTE/dist/js/pages/dashboard.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- ./wrapper -->
    <script>
        $(document).ready(function() {
            $('#table_search').select2({
                width: 'resolve',
                placeholder: "nama depan"
            });
        });
    </script>
    <?php
    if (session()->getFlashdata('pesan_hapus')) { ?>
        <script>
            alert('berhasil hapus data');
        </script>
    <?php } ?>
</body>

</html>
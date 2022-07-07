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

            <!-- right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo base_url('sides/logout'); ?>" class="nav-link btn btn-danger text-white">Log Out</a>
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
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item active">
                            <a href="<?php echo base_url('/sides/penduduk'); ?>" class="nav-link active">
                                <i class="fas fa-users"></i>
                                <p>
                                    Penduduk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/sides/berita'); ?>" class="nav-link">
                                <i class="fas fa-newspaper"></i>
                                <p>
                                    Content
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/sides/aspirasi'); ?>" class="nav-link">
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
                        <?php
                        if (session()->get('level') == 'Master') { ?>
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
                            <h1 class="m-0">Data Penduduk</h1>
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
            <section class="content pb-5">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" method="post" action="<?php echo base_url('/sides/penduduk/update/' . $penduduk->id); ?>">
                                    <?php $validation = \Config\Services::validation(); ?>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama" class="form-control <?php echo $validation->hasError('nama') ? 'is-invalid' : null ?>" value="<?php echo $penduduk->nama; ?>" placeholder="Nama">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('nama'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor ktp</label>
                                            <div class="col-sm-10">
                                                <input type="text" onkeypress="return isNumberKey(event)" name="no_ktp" value="<?php echo $penduduk->no_ktp; ?>" class="form-control <?php echo $validation->hasError('no_ktp') ? 'is-invalid' : null ?>" id="inputPassword3" placeholder="Nomor Ktp">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('no_ktp'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleSelectBorder" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select name="jenis_kelamin" class="custom-select form-control-border" id="exampleSelectBorder">
                                                    <?php
                                                    if ($penduduk->jenis_kelamin === "Laki-Laki") { ?>
                                                        <option selected value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    <?php } else { ?>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option selected value="Perempuan">Perempuan</option>
                                                    <?php }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Desa</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="desa" class="form-control <?php echo $validation->hasError('desa') ? 'is-invalid' : null ?>" value="<?php echo $penduduk->desa; ?>" id="inputPassword3" placeholder="Desa">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('desa'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Dusun</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="dusun" class="form-control <?php echo $validation->hasError('dusun') ? 'is-invalid' : null ?>" value="<?php echo $penduduk->dusun; ?>" id="inputPassword3" placeholder="Dusun">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('dusun'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Rt</label>
                                            <div class="col-sm-10">
                                                <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $penduduk->rt; ?>" name="rt" class="form-control <?php echo $validation->hasError('rt') ? 'is-invalid' : null ?>" id="inputPassword3" placeholder="Rt">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('rt'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Rw</label>
                                            <div class="col-sm-10">
                                                <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $penduduk->rw; ?>" name="rw" class="form-control <?php echo $validation->hasError('rw') ? 'is-invalid' : null ?>" id="inputPassword3" placeholder="Rw">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('rw'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="status" class="form-control  <?php echo $validation->hasError('status') ? 'is-invalid' : null ?>" value="<?php echo $penduduk->status; ?>" id="inputPassword3" placeholder="Status">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('status'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Pendidikan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pendidikan" class="form-control <?php echo $validation->hasError('pendidikan') ? 'is-invalid' : null ?>" value="<?php echo $penduduk->pendidikan; ?>" id="inputPassword3" placeholder="Pendidikan">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('pendidikan'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleSelectBorder" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <select name="agama" class="custom-select form-control-border" id="exampleSelectBorder">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Khatolik">Khatolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-info float-right">Submit</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
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


    <!-- ./wrapper -->
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
</body>

</html>
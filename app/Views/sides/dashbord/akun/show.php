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
                        <li class="nav-item">
                            <a href="<?php echo base_url('/sides/penduduk'); ?>" class="nav-link">
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
                                    Berita
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
                        <li class="nav-item active">
                            <a href="<?php echo base_url('sides/akun'); ?>" class="nav-link active">
                                <i class="fas fa-user-circle"></i>
                                <p>
                                    Akun
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
                            <h1 class="m-0">Data Akun</h1>
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
                                <form class="form-horizontal" method="post" action="<?php echo base_url('/sides/akun/update/' . $akun->id); ?>">
                                    <?php $validation = \Config\Services::validation(); ?>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Depan</label>
                                            <div class="col-sm-10">
                                                <input type="text" onkeyup="valUserPass()" value="<?php echo $akun->nama_depan; ?>" id="nama_depan" name="nama_depan" class="form-control <?php echo $validation->hasError('nama_depan') ? 'is-invalid' : null ?>" placeholder="Nama Depan">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('nama_depan'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Belakang</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama_belakang" value="<?php echo $akun->nama_belakang; ?>" class="form-control <?php echo $validation->hasError('nama_belakang') ? 'is-invalid' : null ?>" placeholder="Nama Belakang">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('nama_belakang'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleSelectBorder" class="col-sm-2 col-form-label">Jenis Akun</label>
                                            <div class="col-sm-10">
                                                <select name="level" class="custom-select form-control-border" id="exampleSelectBorder">
                                                    <option value="Master">Master</option>
                                                    <option value="Admin">Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">email</label>
                                            <div class="col-sm-10">
                                                <input type="email" value="<?php echo $akun->email; ?>" name="email" class="form-control <?php echo $validation->hasError('email') ? 'is-invalid' : null ?>" id="inputPassword3" placeholder="Email">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('email'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Hp</label>
                                            <div class="col-sm-10">
                                                <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $akun->nomor_hp; ?>" name="nomor_hp" class="form-control <?php echo $validation->hasError('nomor_hp') ? 'is-invalid' : null ?>" placeholder="Nomor Hp">
                                                <div class="invalid-feedback">
                                                    <?php echo $validation->getError('nomor_hp'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?php echo $akun->username; ?>" id="username" name="username" class="form-control" id="inputPassword3" readonly placeholder="Username">
                                            </div>
                                        </div>
                                        <input type="text" hidden value="" id="password" name="password" class="form-control" id="inputPassword3" readonly placeholder="Password">
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-info float-right">Submit</button>
                                        <!-- <input type="submit" class="btn btn-info float-right" value="Submit"> -->
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

    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        function valUserPass() {
            const getIdUsername = document.getElementById("nama_depan");
            let randomNumber = Math.floor(1000 + Math.random() * 9000);
            let valUsername = getIdUsername.value + Math.floor(1000 + Math.random() * 9000);

            //generate username
            document.getElementById('username').value = valUsername;

            //generate password
            document.getElementById('password').value = valUsername + "@admin";

            let isUnique = isUniqueUsername(valUsername);

            if (!isUnique) {
                if (!isUniqueId) {
                    document.getElementById('username').value = '';
                    document.getElementById('username').innerHTML = '';
                    document.getElementById('username').innerText = '';
                    do {
                        let result = getIdUsername.value + Math.floor(1000 + Math.random() * 9000);

                        document.getElementById('username').value = result;
                        document.getElementById('username').textContent = result;
                        document.getElementById('username').innerText = result;

                        //generate username unique
                        document.getElementById('username').setAttribute('value', result);
                    } while (!isUniqueLoginId);
                }
            }

            if (getIdUsername.value == '') {
                //generate username
                document.getElementById('username').value = '';
                document.getElementById('username').innerHTML = '';
                document.getElementById('username').innerText = '';

                //generate password
                document.getElementById('password').value = '';
                document.getElementById('password').innerHTML = '';
                document.getElementById('password').innerText = '';
            }
        }

        async function isUniqueUsername(valUsername) {
            fetch('/services/akun/' + valUsername, {
                    method: 'GET'
                })
                .then(response => response.json())
                .then((data) => {

                    // Printing our response 
                    return data.data['is_unique'];
                    // Printing our field of our response
                })
                .catch(errorMsg => {});
        }
    </script>
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
</body>

</html>
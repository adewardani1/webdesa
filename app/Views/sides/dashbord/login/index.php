<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIDES | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('adminLTE/dist/css/adminlte.min.css'); ?>">
    <link rel="icon" href="<?php echo base_url('img/logo-desajatituju.png'); ?>">
</head>

<body class="hold-transition login-page">
    <?php
    if (session()->getFlashdata('alert')) { ?>
        <script>
            alert("username atau password salah!");
        </script>
    <?php } else if (session()->getFlashdata('logFirst')) { ?>
        <script>
            alert("Login terlebih dahulu");
        </script>
    <?php }
    ?>
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>SI-</b>DESA</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login untuk masuk</p>

                <form action="<?php echo base_url('/auth/proses'); ?>" method="post" autocomplete="off">
                    <?php $validation = \Config\Services::validation(); ?>
                    <div class="input-group mb-3">
                        <input type="text" name="user" class="form-control <?php echo $validation->hasError('user') ? 'is-invalid' : null ?>" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('user'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pass" class="form-control <?php echo $validation->hasError('pass') ? 'is-invalid' : null ?>" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('pass'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4 ml-auto">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('adminLTE/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('adminLTE/dist/js/adminlte.min.js'); ?>"></script>
</body>

</html>
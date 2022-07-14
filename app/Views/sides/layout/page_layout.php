<!DOCTYPE html>
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







    <!-- /.control-sidebar -->
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
</head>

<body>
    <?= $this->include('sides/layout/default') ?>
    <?= $this->renderSection('sides/content') ?>
</body>

</html>
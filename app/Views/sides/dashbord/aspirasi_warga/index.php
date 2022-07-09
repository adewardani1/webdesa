<?= $this->extend('sides/layout/page_layout') ?>

<?= $this->section('content') ?>

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
                        <a class="btn btn-primary" href="<?php echo base_url('/sides/aspirasi/create'); ?>">Tambah Data</a>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <<<<<<< HEAD <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Nomor Hp</th>
                                        <th>Message</th>
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
                                =======
                                <th>Headline</th>
                                <th>Jenis Berita</th>
                                <th>#Di Buat</th>
                                <th>#Di Ubah</th>
                                <th>Action</th>
                                <th>gambar</th>
                                </tr>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>rijal</td>
                                    <td>uad</td>
                                </tr>

                                >>>>>>> d480623739874ee4bea10caf9738074577eae343
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

<?= $this->endSection() ?>
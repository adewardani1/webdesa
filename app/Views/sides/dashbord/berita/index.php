<?= $this->extend('sides/layout/page_layout') ?>

<?= $this->section('content') ?>

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
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="<?php echo base_url('sides/berita/create'); ?>">Tambah Data</a>
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
                                    <th>Judul Berita</th>
                                    <th>Jenis Berita</th>
                                    <th>#Di Buat</th>
                                    <th>#Di Ubah</th>
                                    <th>Action</th>
                                    <th>gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = null;
                                foreach ($berita as $row) {
                                    $nomor++; ?>
                                    <tr>
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $row->judul; ?></td>
                                        <td><?php echo $row->jenis; ?></td>
                                        <td><?php echo $row->created_at; ?></td>
                                        <td><?php echo $row->updated_at; ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a class="btn btn-danger" href="<?php echo base_url('sides/berita/delete/' . $row->id); ?>">Hapus</a>
                                                <a class="btn btn-warning" href="<?php echo base_url('sides/berita/show/' . $row->id); ?>">Edit</a>
                                            </div>
                                        </td>
                                        <td><a href="<?php echo base_url('sides/berita/foto/' . $row->id); ?>" class="btn btn-outline-primary"><i class="fas fa-image"></i> Download</a></td>
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
<?= $this->extend('sides/layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Berita</h1>
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
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('sides/berita/save'); ?>">
                        <?php $validation = \Config\Services::validation(); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Berita</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control <?php echo $validation->hasError('judul') ? 'is-invalid' : null ?>" placeholder="Judul Berita">
                                    <div class="invalid-feedback">
                                        <?php echo $validation->getError('judul'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Isi Berita</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control <?php echo $validation->hasError('konten') ? 'is-invalid' : null ?>" name="konten" rows="3" placeholder="Isi Berita"></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo $validation->getError('konten'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleSelectBorder" class="col-sm-2 col-form-label">Jenis Berita</label>
                                <div class="col-sm-10">
                                    <select name="jenis" class="custom-select form-control-border" id="exampleSelectBorder">
                                        <option value="Headline">Headline</option>
                                        <option value="Biasa">Biasa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="exampleInputFile">File input</label>
                                <div class="input-group col-sm-10">
                                    <div class="custom-file">
                                        <input name="gambar" type="file" class="<?php echo $validation->hasError('gambar') ? 'is-invalid' : null ?>">
                                        <div class="invalid-feedback">
                                            <?php echo $validation->getError('gambar'); ?>
                                        </div>
                                    </div>
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

<!-- /.content-wrapper -->
<footer class="main-footer fixed-bottom">
    <strong>Copyright &copy; 2021 <a href="#">SIDES Jatitujuh</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

<?= $this->endSection() ?>
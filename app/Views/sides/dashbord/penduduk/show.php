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
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" value="<?php echo $penduduk->nama; ?>" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor ktp</label>
                                <div class="col-sm-10">
                                    <input type="text" onkeypress="return isNumberKey(event)" name="no_ktp" value="<?php echo $penduduk->no_ktp; ?>" class="form-control" id="inputPassword3" placeholder="Nomor Ktp">
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
                                    <input type="text" name="desa" class="form-control" value="<?php echo $penduduk->desa; ?>" id="inputPassword3" placeholder="Desa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Dusun</label>
                                <div class="col-sm-10">
                                    <input type="text" name="dusun" class="form-control" value="<?php echo $penduduk->dusun; ?>" id="inputPassword3" placeholder="Dusun">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Rt</label>
                                <div class="col-sm-10">
                                    <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $penduduk->rt; ?>" name="rt" class="form-control" id="inputPassword3" placeholder="Rt">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Rw</label>
                                <div class="col-sm-10">
                                    <input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $penduduk->rw; ?>" name="rw" class="form-control" id="inputPassword3" placeholder="Rw">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <input type="text" name="status" class="form-control" value="<?php echo $penduduk->status; ?>" id="inputPassword3" placeholder="Status">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Pendidikan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pendidikan" class="form-control" value="<?php echo $penduduk->pendidikan; ?>" id="inputPassword3" placeholder="Pendidikan">
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


<?= $this->endSection() ?>
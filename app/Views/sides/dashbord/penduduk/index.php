<?= $this->extend('sides/layout/page_layout') ?>

<?= $this->section('content') ?>

<div>
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
                            <a class="btn btn-primary" href="<?php echo base_url('/sides/penduduk/create'); ?>">Tambah Data</a>
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
                                        <th>Nama</th>
                                        <th>Nomor Ktp</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Desa</th>
                                        <th>Dusun</th>
                                        <th>Rt</th>
                                        <th>Rw</th>
                                        <th>Status</th>
                                        <th>Pendidikan</th>
                                        <th>Agama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = null;
                                    foreach ($penduduk as $row) { ?>
                                        <?php $nomor++; ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->no_ktp; ?></td>
                                            <td><?php echo $row->jenis_kelamin; ?></td>
                                            <td><?php echo $row->desa; ?></td>
                                            <td><?php echo $row->dusun; ?></td>
                                            <td><?php echo $row->rt; ?></td>
                                            <td><?php echo $row->rw; ?></td>
                                            <td><?php echo $row->status; ?></td>
                                            <td><?php echo $row->pendidikan; ?></td>
                                            <td><?php echo $row->agama; ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-danger" href="<?php echo base_url('/sides/penduduk/delete/' . $row->id); ?>">Hapus</a>
                                                    <a class="btn btn-warning" href="<?php echo base_url('/sides/penduduk/show/' . $row->id); ?>">Edit</a>
                                                    <!-- <button type="button" class="btn btn-danger">Hapus</button>
                                                            <button type="button" class="btn btn-warning">Edit</button> -->
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
</div>


<?= $this->endSection() ?>
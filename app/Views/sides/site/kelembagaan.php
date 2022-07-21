<?= $this->extend('layout/page_layout'); ?>

<?= $this->Section('content'); ?>

<div class="jumbotron-laporan jumbotron-fluid">
    <div class="container">
        <h1 class="">Sejarah Desa</h1>
        <hr class="horizontal-line">
        <p class="lead">Lembaga masyarakat yang ada di desa Jatitujuh Kecamatan Jatitujuh Kabupaten Jatitujuh</p>
        <p class="lead">Provinsi Jawa Tengah</p>
    </div>
</div>

<div class="jumbotron-img-kelembagaan">
    <div class="container">
        <div class="row justify-content-md-center ">
            <?php
            foreach ($kelembagaan as $row) { ?>
                <div class="col-sm-3 text-center">
                    <img class="img-kelembagaan img-fluid" src="<?php echo base_url('img/kelembagaan/' . $row->gambar); ?>" alt="">
                    <p class="mt-3"><?php echo $row->nama; ?></p>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
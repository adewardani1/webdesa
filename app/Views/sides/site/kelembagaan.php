<!-- start navbar -->

<?= $this->extend('layout/page_layout'); ?>

<!-- end navbar -->

<?= $this->Section('content'); ?>

<!-- start jumbotron kelembagaan -->

<div class="jumbotron-kelembagaan">
    <div class="group-konten-jumbotron text-center">
        <h1>LEMBAGA MASYARAKAT</h1>
        <hr class="horizontal-line">
        <p>lembaga masyarakat yang ada di desa jatitujuh kecamatan jatitujuh kabupaten jatitujuh</p>
        <p>provinsi jawa tengah</p>
    </div>
</div>

<!-- end jumbotron kelembagaan -->

<!-- start gambar jumbotron kelembagaan -->

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
<!-- end gambar jumbotron kelembagaan -->
<?= $this->endSection(); ?>
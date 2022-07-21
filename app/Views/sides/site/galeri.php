<!-- start navbar -->

<?= $this->extend('layout/page_layout'); ?>

<!-- end navbar -->

<?= $this->Section('content'); ?>

<!-- start jumbotron galeri -->

<!-- <div class="jumbotron-galeri">
    <div class="jumbotron-text text-center">
        <h1>Galeri</h1>
        <p>Desa Jatitujuh</p>
    </div>
</div> -->

<div class="jumbotron-pengumuman jumbotron-fluid">
    <div class="news-judul text-center">
        <h1>Galeri</h1>
        <p class="lead">Desa Jatitujuh</p>
    </div>
</div>
<!-- end jumbotron galeri -->

<!-- start swiper galeri -->

<div class="jumbotron-galeri-konten">
    <div class="container">
        <div class="row mt-5">
            <div class="col-left col-sm-6 rounded-3">
                <h1>GALERI DESA</h1>
                <p>Dokumentasi foto-foto seputar penyelenggaraan pemerintahan desa, pembangunan, pemberdayaan, wisata, seni dan budaya, olahraga dan lain sebagainya.</p>
            </div>
            <div class="col-right col-sm-6">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($galeri as $row) { ?>
                            <div class="swiper-slide">
                                <img class="rounded" src="<?php echo base_url('img/galeri/' . $row->gambar); ?>" alt="" srcset="">
                            </div>
                        <?php }
                        ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- end swiper galeri -->

<?= $this->endSection(); ?>
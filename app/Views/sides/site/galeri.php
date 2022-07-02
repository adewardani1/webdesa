<!-- start navbar -->

<?= $this->extend('layout/page_layout'); ?>

<!-- end navbar -->

<?= $this->Section('content'); ?>

<!-- start jumbotron galeri -->

<div class="jumbotron-galeri">
    <div class="jumbotron-text text-center">
        <h1>GALERI</h1>
        <p>JATITUJUH</p>
    </div>
</div>

<!-- end jumbotron galeri -->

<!-- start swiper galeri -->

<div class="jumbotron-konten-swiper">
    <div class="box-konten text-center mt-5">
        <h1>GALERI FOTO DESA</h1>
        <p>Dokumentasi foto-foto seputar penyelenggaraan pemerintahan desa, pembangunan, pemberdayaan, wisata, seni dan budaya, olahraga dan lain sebagainya.</p>
    </div>
    <div class="swiper mySwiper mt-5">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="rounded" src="/img/foto.png" alt="" srcset="">
            </div>
            <div class="swiper-slide">
                <img class="rounded" src="/img/foto.png" alt="" srcset="">
            </div>
            <div class="swiper-slide">
                <img class="rounded" src="/img/foto.png" alt="" srcset="">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- end swiper galeri -->

<?= $this->endSection(); ?>
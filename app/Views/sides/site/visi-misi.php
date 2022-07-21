<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Jumbotron -->
<div class="jumbotron-laporan jumbotron-fluid">
    <div class="container">
        <h1 class="">Sejarah Desa</h1>
        <hr class="horizontal-line">
        <p class="lead">Desa Jatijutuh</p>
        <button class="btn btn-dark">SEJARAH</button>
    </div>
</div>

<div class="jumbotron-visimisi">
    <div class="container">
        <h1>VISI DAN MISI</h1>
        <?php
        if (!$visiMisi->gambar) { ?>
            <p>belum ada data</p>
        <?php } else { ?>
            <img src="/img/visi_misi/<?php echo $visiMisi->gambar; ?>" alt="" class="img-fluid">
        <?php }
        ?>
        <p>Visi dan Misi Desa Jatitujuh</p>
    </div>
</div>

<?= $this->endSection() ?>
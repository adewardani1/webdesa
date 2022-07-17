<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="jumbotron-visimisi">
    <div class="container">
        <h1>VISI DAN MISI</h1>
        <?php
        if (!$visiMisi->gambar) { ?>
            <p>belum ada data</p>
        <?php } else { ?>
            <img src="/img/visi_misi/<?php echo $visiMisi->gambar; ?>" alt="">
        <?php }
        ?>
        <p>Visi dan Misi Desa Jatitujuh</p>
    </div>
</div>

<?= $this->endSection() ?>
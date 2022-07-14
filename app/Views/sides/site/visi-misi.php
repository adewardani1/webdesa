<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="jumbotron-visimisi">
    <div class="container">
        <h1>VISI DAN MISI</h1>
        <img src="/img/visi_misi/<?php echo $visiMisi->gambar; ?>" alt="">
        <p>Visi dan Misi Desa Jatitujuh</p>
    </div>
</div>

<?= $this->endSection() ?>
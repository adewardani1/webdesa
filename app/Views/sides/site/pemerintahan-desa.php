<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="jumbotron-pemerintahan">
    <h1>SOTK</h1>
    <h4>Pemerintahan Desa Jatitujuh</h4>
</div>
<div class="pemerintahan">
    <div class="container">
        <p>Alamat: Jl. Raya Randudongkal – Belik KM 7 Desa Bulakan Kecamatan Belik Kabupaten Pemalang Provinsi Jawa Tengah, Kodepos: 52356</p>
        <p>Email: bulakan@desakupemalang.id</p>
        <p>Telp: +6287830841173</p>

        <h3>SOTK</h3>
        <div class="text-center">
            <img src="/img/pemerintah_desa/<?php echo $pemerintahDesa->gambar; ?>" alt="">
        </div>
    </div>
</div>

<?= $this->endSection() ?>
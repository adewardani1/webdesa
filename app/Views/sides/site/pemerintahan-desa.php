<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<div class="jumbotron-pemerintahan jumbotron-fluid">
    <div class="container">
        <h5 class="display-2">STOK</h5>
        <h5 class="card-title text-dark">Pemerintahan Desa Jatitujuh</h5>
    </div>
</div>

<div class="pemerintahan">
    <div class="container">
        <h3>Struktur Organisasi dan Tata Kerja</h3>
        <div class="text-center">
            <img src="/img/pemerintah_desa/<?php echo $pemerintahDesa->gambar; ?>" alt="">
        </div>
        <p>Alamat: Jl. Raya Randudongkal – Belik KM 7 Desa Bulakan Kecamatan Belik Kabupaten Pemalang Provinsi Jawa Tengah, Kodepos: 52356</p>
        <p>Email: bulakan@desakupemalang.id</p>
        <p>Telp: +6287830841173</p>
    </div>
</div>

<?= $this->endSection() ?>
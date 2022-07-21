<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<div>
    <!-- Jumbotron -->
    <div class="jumbotron-laporan jumbotron-fluid">
        <div class="container">
            <h1 class="">Pemerintah Desa</h1>
            <hr class="horizontal-line">
            <p class="lead">Desa Jatijutuh</p>
        </div>
    </div>

    <div class="pemerintahan ">
        <div class="container">
            <div class="gambar-pemerintah-desa text-center">
                <img src="/img/pemerintah_desa/<?php echo $pemerintahDesa->gambar; ?>" alt="" class="img-fluid">
            </div>
            <div class="text-center">
                <p class="text-dark">Alamat: Jl. Raya Randudongkal – Belik KM 7 Desa Bulakan Kecamatan Belik Kabupaten Pemalang Provinsi Jawa Tengah, Kodepos: 52356</p>
                <p class="text-dark">Email: bulakan@desakupemalang.id</p>
                <p class="text-dark mb-5">Telp: +6287830841173</p>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
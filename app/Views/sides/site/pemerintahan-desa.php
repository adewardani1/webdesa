<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<div>
    <div class="jumbotron-pemerintahan jumbotron-fluid">
        <div class="container">
            <h5 class="display-2 text-center">STOK</h5>
            <h5 class="card-title text-dark text-center">Pemerintahan Desa Jatitujuh</h5>
        </div>
    </div>

    <div class="pemerintahan ">
        <div class="container">
            <div class="text-center">
                <p class="text-dark">Alamat: Jl. Raya Randudongkal – Belik KM 7 Desa Bulakan Kecamatan Belik Kabupaten Pemalang Provinsi Jawa Tengah, Kodepos: 52356</p>
                <p class="text-dark">Email: bulakan@desakupemalang.id</p>
                <p class="text-dark">Telp: +6287830841173</p>
            </div>
            <h3 class="text-center">Struktur Organisasi dan Tata Kerja</h3>
            <div class="text-center">
                <img src="/img/pemerintah_desa/<?php echo $pemerintahDesa->gambar; ?>" alt="">
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
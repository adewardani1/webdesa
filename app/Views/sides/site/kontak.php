<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="jumbotron-kontak">
    <div class="row">
        <h1>HUBUNGI KAMI</h1>
        <h5>Pemerintahan Desa Jatitujuh</h5>

        <div class="col-sm-6">
            <div class="widget">
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-envelope fa-3x"></i>
                        <h1>Kontak</h1>
                        <p>Email: bulakan@desakupemalang.id</p>
                        <p>HP/Wa: 087830841173</p>
                    </div>
                </div>
            </div>

            <div class="widget">
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot fa-3x"></i>
                        <h1>Alamat</h1>
                        <p>Jl. Raya Randudongkal-Belik Km 07 Desa Bulakan Kecamatan Belik Kabupaten Pemalang Provinsi Jawa Tengah. Kode Pos: 52356</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=jatitujuh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 600px;
                        }
                    </style><a href="https://www.embedgooglemap.net"></a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 600px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="jumbotron-detail" style="background: linear-gradient(rgba(51, 51, 51, 0.5), rgba(51, 51, 51, 0.5)), url('/img/berita/<?php echo $pengumuman->gambar; ?>');">
    <p><?php echo date("Y-m-d", strtotime($pengumuman->updated_at)); ?> By <?php echo $pengumuman->nama_depan; ?></p>
    <h1><?php echo $pengumuman->judul; ?></h1>
</div>

<div class="detail">
    <div style="width: 1120px;" class="container">
        <div class="row">
            <div class="col-sm-7">
                <?php
                $pieces = explode(".", $pengumuman->konten);
                $result = '';
                $result = $pieces[0];
                $result = '<p .../>';
                for ($i = 0; $i < count($pieces); $i++) {
                    $result .= $pieces[$i];
                    if ($i % 1 == 0) {
                        $result .= '<p .../>';
                    }
                }
                echo $result;
                ?>

                <div class="row row-above">
                    <form action="<?php echo base_url('comment/submit/' . $pengumuman->id); ?>" method="post">
                        <div class="col-sm-12">
                            <h1>LEAVE A REPLY</h1>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <label for="">Comment*</label>
                            <textarea required name="komentar" id="" cols="67" rows="10"></textarea>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mt-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name*</label>
                                        <input type="text" name="nama" class="form" id="exampleFormControlInput1" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email*</label>
                                        <input type="email" name="email" class="form" id="exampleFormControlInput1" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3">
                                        <label for="exampleFormControlInput1" class="form-label">Website</label>
                                        <input type="text" name="website" class="form" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <input class="btn-submit" type="submit" name="submit" value="Post">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="side">
                    <div class="group-side" style="margin-left: 100px">
                        <h5 style="font-weight:bolder;">PEMDES JATITUJUH</h5>
                        <p style="font-size:12px;">Jl. Raya Randudongkal Belik KM 7 Desa Bulakan Kecamatan Belik Kabupaten Pemalang Provinsi Jawa Tengah</p>

                        <h5 style="font-weight:bolder;">KEPALA DESA</h5>
                        <img src="/img/foto.png" alt="">

                        <h5>IKUTI KAMI</h5>
                        <div class="p-3 mb-2 fontawesome-side">
                            <!-- Facebook -->
                            <a href=""><i class="fab fa-facebook-f p-1 sosial-media"></i></a>

                            <!-- Twitter -->
                            <a href=""><i class="fab fa-twitter p-1 sosial-media"></i></a>

                            <!-- Instagram -->
                            <a href=""><i class="fab fa-instagram p-1 sosial-media"></i></a>

                            <!-- Youtube -->
                            <a href=""><i class="fab fa-youtube p-1 sosial-media"></i></a>
                        </div>

                        <div class="widget">
                            <h5>RECENT POST</h5>
                            <div class="">
                                <span class="judul"><a href="<?php echo base_url('news/' . $recentPengumuman->id); ?>" title=""><?php echo $recentPengumuman->judul; ?></a></span>
                                <time class="waktu"><?php echo date("Y-m-d", strtotime($recentPengumuman->updated_at)); ?></time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
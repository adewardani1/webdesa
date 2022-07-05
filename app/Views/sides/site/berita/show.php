<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="jumbotron-detail" style="background: linear-gradient(rgba(51, 51, 51, 0.5), rgba(51, 51, 51, 0.5)), url('/img/berita/<?php echo $berita->gambar; ?>');">
    <p><?php echo date("Y-m-d", strtotime($berita->updated_at)); ?> By <?php echo $berita->nama_depan; ?></p>
    <h1><?php echo $berita->judul; ?></h1>
</div>

<div class="detail">
    <div style="width: 1120px;" class="container">
        <div class="row">
            <div class="col-sm-7">
                <?php
                $pieces = explode(".", $berita->konten);
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

                <div id="komen" class="komen-area">
                    <div id="" class="">
                        <h3 id="">Leave Reply
                            <small><a rel="nofollow" id="cancel-comment-reply-link" href="/layanan-posyandu-dan-posbindu-di-gang-mangun/#respond" style="display:none;">Cancel reply</a></small>
                        </h3>
                    </div>
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
                                <span class="judul"><a href="<?php echo base_url('news/' . $recentBerita->id); ?>" title=""><?php echo $recentBerita->judul; ?></a></span>
                                <time class="waktu"><?php echo date("Y-m-d", strtotime($recentBerita->updated_at)); ?></time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
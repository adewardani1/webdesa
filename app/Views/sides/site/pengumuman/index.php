<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="jumbotron-pengumuman">
    <h1>PENGUMUMAN</h1>
</div>

<div class="jumbotron-isi">
    <div class="container">
        <div class="row">
            <?php
            foreach ($pengumuman as $row) { ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/img/berita/<?php echo $row->gambar; ?>" alt="...">
                        <div class="card-body mb-3">
                            <h5 class="card-title text-dark"><?php echo $row->judul; ?></h5>
                            <p class="date-berita"><?php echo date("Y-m-d", strtotime($row->updated_at)); ?></p>
                            <div class="btn-read-more">
                                <a href="<?php echo base_url('pengumuman/' . $row->id); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
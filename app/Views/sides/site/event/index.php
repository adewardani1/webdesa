<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="jumbotron-pengumuman jumbotron-fluid">
    <div class="news-judul text-center">
        <h1>Pengumuman</h1>
    </div>
</div>

<div class="jumbotron-kontent-event">
    <div class="container">
        <div class="row">
            <?php
            foreach ($event as $row) { ?>
                <div class="col-sm-4">
                    <div class="card border-0" data-aos-duration="10000" data-aos="fade-up">
                        <img src="/img/berita/<?php echo $row->gambar; ?>" alt="...">
                        <div class="card-body mb-3">
                            <p class="date-berita"><?php echo date("Y-m-d", strtotime($row->updated_at)); ?></p>
                            <p class="card-title text-dark"><?php echo $row->judul; ?></p>
                            <div class="btn-read-more">
                                <a href="<?php echo base_url('event/' . $row->id); ?>">Read More</a>
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
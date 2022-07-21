<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="jumbotron-pengumuman jumbotron-fluid">
    <div class="news-judul text-center">
        <h1>Berita</h1>
    </div>
</div>

<div class="jumbotron-news">
    <div class="container">
        <div class="row">
            <?php
            foreach ($berita as $row) { ?>
                <div class="col-sm-4">
                    <div class="card border-0" data-aos-duration="10000" data-aos="fade-up">
                        <img src="/img/content/<?php echo $row->jenis; ?>/<?php echo $row->gambar; ?>" alt="...">
                        <div class="card-body mb-3">
                            <p class="date-berita"><?php echo date("Y-m-d", strtotime($row->created_at)); ?></p>
                            <p class="card-title text-dark"><?php echo $row->judul; ?></p>
                            <div class="btn-read-more">
                                <a href="<?php echo base_url('news/' . $row->id); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
        <nav aria-label="Page navigation example" class="mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="jumbotron-laporan jumbotron-fluid">
    <div class="container">
        <h1 class="">Demografi</h1>
        <p class="lead">Desa Jatijutuh</p>
    </div>
</div>

<div class="content">
    <div class="container-demografi ">
        <div class="row mt-4">
            <div class="col-sm-6">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" colspan="3" class="text-center">Batas Wilayah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Letak geografi Desa Bulakan, terletak diantara : </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Sebelah Utara : Desa Sikasur</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Sebelah selatan : Desa Beluk</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Sebelah Barat : Kec. Moga</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Sebelah Timur : Desa Mendelem</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" colspan="3" class="text-center">Luas Wilayah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pemukiman : 159 ha</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Pemukiman : 159 ha</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
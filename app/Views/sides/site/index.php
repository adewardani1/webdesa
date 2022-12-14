<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <title>Desa Jatitujuh</title>
</head>

<body>
  <!-- start navbar -->

  <?= $this->extend('layout/page_layout') ?>

  <!-- end navbar -->

  <!-- start carousel -->

  <?= $this->Section('content') ?>

  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      $counter = 0;
      foreach ($beritaHeadline as $row) { ?>
        <div class="carousel-item <?= ($counter == 0) ? "active" : "" ?>" data-bs-interval="2000">
          <a href="<?php echo base_url('news/' . $row->id); ?>">
            <img src="/img/content/<?php echo $row->jenis; ?>/<?php echo $row->gambar; ?>" class="img-size d-block w-100" alt="">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $row->judul; ?></h5>
            <p><?php echo date("Y-m-d", strtotime($row->updated_at)); ?></p>
          </div>
        </div>
      <?php $counter++;
      }
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->

  <!-- start menu button -->

  <!-- <div class="box-btn"> -->
  <div class="kotak-icon d-flex bg-flex justify-content-center">
    <div class="button-icon col-sm-2 btn-menu text-center">
      <div class="btn-icon">
        <i class="fa-solid fa-building-columns fa-3x"></i>
      </div>
      <div class="btn-icon btn-text">
        <p>PROFILE</p>
      </div>
    </div>
    <div class="col-sm-2 btn-menu text-center">
      <div class="btn-icon">
        <i class="fa-solid fa-book-open fa-3x"></i>
      </div>
      <div class="btn-text">
        <p>INFORMASI PUBLIK</p>
      </div>
    </div>
    <div class="col-sm-2 btn-menu text-center">
      <div class="btn-icon">
        <i class="fa-solid fa-bullhorn fa-3x"></i>
      </div>
      <div class="btn-text">
        <p>PENGUMUMAN</p>
      </div>
    </div>
    <div class="col-sm-2 btn-menu text-center">
      <div class="btn-icon">
        <i class="fa-solid fa-users fa-3x"></i>
      </div>
      <div class="btn-text">
        <p>ASPIRASI WARGA</p>
      </div>
    </div>
    <div class="col-sm-2 btn-menu text-center">
      <div class="btn-icon">
        <i class="fa-solid fa-users fa-3x"></i>
      </div>
      <div class="btn-text">
        <p>ASPIRASI WARGA</p>
      </div>
    </div>
  </div>

  <!-- end menu button -->

  <!-- start profil kepala desa -->

  <div class="box-head-profil">
    <div class="container">
      <div class="row">
        <div class="foto col-sm-6 mt-5 text-center">
          <img src="/img/foto.png" alt="" class="img-fluid justify-content-center">
        </div>
        <div class=" col-sm-6">
          <h1>"</h1>
          <p class="text-dark">Selamat datang di website resmi Pemerintah Desa Jatitujug Kecamatan jatitujuh kabupaten majalengka. ini adalah ruang media informasi desa sebagai sarana komunikasi dan keterbukaan informasi publik. Jangan lupa selalu ikuti website dan media sosial kami untuk update informasi dalam penyelenggaraan pemerintah di Desa Jatitujuh. Terima kasih sudah mengunjungi website kami. semoga bermanfaat, kritik dan saran selalu kami harapkan untuk desa yang lebih baik</p>
          <h3>Abdul Kohar Muzakir</h3>
          <h4 class="text-dark">KEPALA DESA JATITUJUH</h4>
          <a href="#">PROFIL</a>
        </div>
      </div>
    </div>
  </div>

  <!-- end profil kepala desa -->

  <!-- start data stattistik -->

  <div class="jumbotron-statistik">
    <div class="wave-container">
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,96L11.4,90.7C22.9,85,46,75,69,80C91.4,85,114,107,137,112C160,117,183,107,206,133.3C228.6,160,251,224,274,229.3C297.1,235,320,181,343,165.3C365.7,149,389,171,411,192C434.3,213,457,235,480,240C502.9,245,526,235,549,234.7C571.4,235,594,245,617,224C640,203,663,149,686,144C708.6,139,731,181,754,202.7C777.1,224,800,224,823,202.7C845.7,181,869,139,891,101.3C914.3,64,937,32,960,26.7C982.9,21,1006,43,1029,58.7C1051.4,75,1074,85,1097,85.3C1120,85,1143,75,1166,85.3C1188.6,96,1211,128,1234,149.3C1257.1,171,1280,181,1303,176C1325.7,171,1349,149,1371,154.7C1394.3,160,1417,192,1429,208L1440,224L1440,0L1428.6,0C1417.1,0,1394,0,1371,0C1348.6,0,1326,0,1303,0C1280,0,1257,0,1234,0C1211.4,0,1189,0,1166,0C1142.9,0,1120,0,1097,0C1074.3,0,1051,0,1029,0C1005.7,0,983,0,960,0C937.1,0,914,0,891,0C868.6,0,846,0,823,0C800,0,777,0,754,0C731.4,0,709,0,686,0C662.9,0,640,0,617,0C594.3,0,571,0,549,0C525.7,0,503,0,480,0C457.1,0,434,0,411,0C388.6,0,366,0,343,0C320,0,297,0,274,0C251.4,0,229,0,206,0C182.9,0,160,0,137,0C114.3,0,91,0,69,0C45.7,0,23,0,11,0L0,0Z"></path>
      </svg>
      <h1 class="text-center">Jatitujuh Desa</h1>
      <div class="d-flex justify-content-center">
        <div class="text-center icon">
          <i class="fa-solid fa-users fa-4x"></i>
          <p><?php echo $penduduk->penduduk; ?></p>
          <p>Penduduk</p>
        </div>
        <div class="text-center icon">
          <i class="fa-solid fa-person fa-4x"></i>
          <p><?php echo $pendudukLaki->laki; ?></p>
          <p>Laki-Laki</p>
        </div>
        <div class="text-center icon">
          <i class="fa-solid fa-person-dress fa-4x"></i>
          <p><?php echo $pendudukPerempuan->perempuan; ?></p>
          <p>Perempuan</p>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <div class="btn-statistik">
          <a href="#">Statistik Penduduk</a>
        </div>
        <div class="btn-statistik">
          <a href="#">Demografi</a>
        </div>
      </div>
    </div>
  </div>

  <!-- end data stattistik -->

  <!-- start layanan publik -->

  <div class="jumbotron-layanan mt-5">
    <div class="container">
      <div class="header-layanan">
        <h1 class="text-center">Layanan Publik</h1>
        <hr>
      </div>
      <div class="row row-1 mt-5">
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-solid fa-bullhorn fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>PENGUMUMAN</h4>
          <P class="text-dark">Info dan pengumuman</P>
        </div>
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-solid fa-person-chalkboard fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>ADUAN WARGA</h4>
          <P class="text-dark">Kontak untuk warga yang ingin memberikan aduan, saran maupun kritik</P>
        </div>
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-solid fa-person-chalkboard fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>PROFILE DESA</h4>
          <P class="text-dark">Kontak untuk warga yang ingin memberikan aduan, saran maupun kritik</P>
        </div>
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-solid fa-person-chalkboard fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>KONTAK DESA</h4>
          <P class="text-dark">Kontak untuk warga yang ingin memberikan aduan, saran maupun kritik</P>
        </div>
      </div>
    </div>
  </div>

  <!-- end layanan publik -->

  <!-- start peduli lindungi -->

  <div class="jumbotron-covid">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
          <div class="group-text-peduli">
            <h2 class="text-light">#DARI DESA MELAWAN COVID19</h2>
            <p class="mb-5">dimulai dari diri sendiri mari jadi pahlawan indonesia dengan disiplin menjalankan covid-19, jaga diri, jaga keluarga dan jaga sesama<br>#BersatuKitaBisa #CepatPulihIndonesia</p>
            <a class="btn-vaksin" href="#">#AyoVaksin</a>
          </div>
        </div>
        <div class="col-sm-4">
          <p>Yang tervaksin</p>
          <p>25</p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 200%;" aria-valuenow="25" aria-valuemin="300" aria-valuemax="300"></div>
          </div>
          <a href="https://play.google.com/store/apps/details?id=com.telkom.tracencare&hl=in&gl=US"><img src="<?php echo base_url('img/googleplay.png'); ?>" width="130px" height="100px"></a><br>
          <a href="https://apps.apple.com/id/app/pedulilindungi/id1504600374"><img src="<?php echo base_url('img/appstore.png'); ?>" width="130px" height="100px"></a>
          <p>Download Aplikasi Pedulilindungi</p>
        </div>
      </div>
    </div>
  </div>

  <!-- end peduli lindungin -->

  <!-- start berita terkini -->

  <div class="jumbotron-berita">
    <div class="container">
      <div class="header text-center">
        <h1>BERITA TERKINI</h1>
      </div>
      <div class="row">
        <?php
        foreach ($beritaTerkini as $row) { ?>
          <div class="col-sm-4">
            <div class="card">
              <img src="/img/content/<?php echo $row->jenis; ?>/<?php echo $row->gambar; ?>" class="card-img-top" alt="...">
              <div class="card-body mb-3">
                <h5 class="card-title text-dark"><?php echo $row->judul; ?></h5>
                <p class="date-berita"><?php echo $row->created_at; ?></p>
                <div class="btn-selengkapnya">
                  <a href="<?php echo base_url('news/' . $row->id); ?>">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        <?php }
        ?>
      </div>
      <div class="text-center my-5">
        <a href="<?php echo base_url('news'); ?>" class="btn-berita">Berita Lainnya</a>
      </div>
    </div>
  </div>

  <!-- end berita terkini -->


  <!-- start form pengaduan -->

  <div class="jumbotron-pengaduan">
    <div class="container">
      <div class="header text-center">
        <h1>FORM PENGADUAN DAN ASPIRASI WARGA</h1>
      </div>
      <div class="form">
        <form action="<?php echo base_url('aspirasi/submit'); ?>" method="post">
          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No HP</label>
                <input type="text" name="nomor_hp" maxlength="13" minlength="10" onkeypress="return isNumberKey(event)" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3" required></textarea>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- end form pengaduan -->


  <!-- start follow -->

  <div class="jumbotron-follow">
    <div class="container">
      <div class="row">
        <div class="header text-center">
          <h1>FOLLOW US</h1>
          <hr />
        </div>
        <div class="col-sm-6 mx-auto">
          <blockquote class="twitter-tweet">
            <p lang="qme" dir="ltr"> <a href="https://t.co/cFo1N2WOGo">pic.twitter.com/cFo1N2WOGo</a></p>&mdash; Sanpie ?????? (@Sanpie34i) <a href="https://twitter.com/Sanpie34i/status/1541757150699343872?ref_src=twsrc%5Etfw">June 28, 2022</a>
          </blockquote>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-sm-6 mx-auto">
          <blockquote class="twitter-tweet">
            <p lang="in" dir="ltr">Skrng tw kn mn yg idol bnrn <a href="https://twitter.com/C_JesslynJKT48?ref_src=twsrc%5Etfw">@C_JesslynJKT48</a> <a href="https://t.co/5HTsVxszRf">pic.twitter.com/5HTsVxszRf</a></p>&mdash; Kobo Kanaeru (??????) ??? @???????????????ID (@kobokanaeru) <a href="https://twitter.com/kobokanaeru/status/1541756536262864896?ref_src=twsrc%5Etfw">June 28, 2022</a>
          </blockquote>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>

  <!-- end follow -->


  <?php
  if (session()->getFlashdata('berhasil')) { ?>
    <script>
      alert('komentar anda telah kami terima, terima kasih');
    </script>
  <?php } else if (session()->getFlashdata('success')) { ?>
    <script>
      alert('aspirasi anda telah kami terima, terima kasih');
    </script>
  <?php }
  ?>

  <script>
    function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
  </script>

  <!-- end follow -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <?= $this->endSection() ?>
</body>

</html>
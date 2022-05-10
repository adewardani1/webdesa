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
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="/img/desajatituju.jpg" class="img-size d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="/img/WhatsApp Image 2022-04-26 at 21.29.46.jpeg" class="img-size d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="/img/WhatsApp Image 2022-04-26 at 21.30.05.jpeg" class="img-size d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
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

  <div class="box-btn">
    <!-- <div class="box-btn-link text-center">
      <a href="#" class="">
        <i class="fa-solid fa-house-user"></i><br>
        HOME
      </a>
      <a href="#" class="">
        <i class="fa-solid fa-house-user"></i><br>
        INFORMASI PUBLIK
      </a>
      <a href="#" class="">
        <i class="fa-solid fa-house-user"></i>
        HOME
      </a>
      <a href="#" class="">
        <i class="fa-solid fa-house-user"></i>
        HOME
      </a>
      <a href="#" class="">
        <i class="fa-solid fa-house-user"></i>
        HOME
      </a>
      <a href="#" class="">
        <i class="fa-solid fa-house-user"></i>
        HOME
      </a>
    </div> -->
    <div class="d-flex justify-content-center bg-flex">
      <div class="btn-menu text-center">
        <div class="btn-icon">
          <i class="fa-solid fa-building-columns fa-4x"></i>
        </div>
        <div class="btn-text">
          <p>PROFILE</p>
        </div>
      </div>
      <div class="btn-menu text-center">
        <div class="btn-icon">
          <i class="fa-solid fa-book-open fa-4x"></i>
        </div>
        <div class="btn-text">
          <p>INFORMASI PUBLIK</p>
        </div>
      </div>
      <div class="btn-menu text-center">
        <div class="btn-icon">
          <i class="fa-solid fa-bullhorn fa-4x"></i>
        </div>
        <div class="btn-text">
          <p>PENGUMUMAN</p>
        </div>
      </div>
      <div class="btn-menu text-center">
        <div class="btn-icon">
          <i class="fa-solid fa-users fa-4x"></i>
        </div>
        <div class="btn-text">
          <p>ASPIRASI WARGA</p>
        </div>
      </div>
      <div class="btn-menu text-center">
        <div class="btn-icon">
          <i class="fa-solid fa-phone fa-4x"></i>
        </div>
        <div class="btn-text">
          <p>HELLO DESA</p>
        </div>
      </div>
      <div class="btn-menu text-center">
        <div class="btn-icon">
          <i class="fa-solid fa-basket-shopping fa-4x"></i>
        </div>
        <div class="btn-text">
          <p>PRODUK DESA</p>
        </div>
      </div>
      <div class="btn-menu text-center">
        <div class="btn-icon">
          <i class="fa-solid fa-building fa-4x"></i>
        </div>
        <div class="btn-text">
          <p>BUMDES</p>
        </div>
      </div>
      <!-- <a href="#" class="">
        <i class="fa-solid fa-house-user"></i><br>
        HOME
      </a>
      <a href="#" class="">
        <i class="fa-solid fa-house-user"></i><br>
        BERANDA
      </a> -->
      <!-- <button>
        <i class="fa-solid fa-house-user fa-2xl space"></i><br>
        <p>PROFILE</p>
      </button>
      <button>
        <i class="fa-solid fa-house-user fa-2xl space"></i><br>
        <p>INFORMASI PUBLIK</p>
      </button>
      <button>
        <i class="fa-solid fa-house-user fa-2xl space"></i><br>
        <p>PENGUMUMAN</p>
      </button>
      <button>
        <i class="fa-solid fa-house-user fa-2xl space"></i><br>
        <p>ASPIRASI WARGA</p>
      </button>
      <button>
        <i class="fa-solid fa-house-user fa-2xl space"></i><br>
        <p>HELLO DESA</p>
      </button>
      <button>
        <i class="fa-solid fa-house-user fa-2xl space"></i><br>
        <p>PRODUK DESA</p>
      </button>
      <button>
        <i class="fa-solid fa-house-user fa-2xl space"></i><br>
        <p>BUMDES</p>
      </button> -->
    </div>
  </div>

  <!-- end menu button -->

  <!-- start profil kepala desa -->

  <div class="box-head-profil">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="" alt="">
        </div>
        <div class="col-sm-6">
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
          <p>2000</p>
          <p>Penduduk</p>
        </div>
        <div class="text-center icon">
          <i class="fa-solid fa-user-tie fa-4x"></i>
          <p>2000</p>
          <p>Kepala Heluarga</p>
        </div>
        <div class="text-center icon">
          <i class="fa-solid fa-people-group fa-4x"></i>
          <p>2000</p>
          <P>Anggota Keluarga</P>
        </div>
        <div class="text-center icon">
          <i class="fa-solid fa-person fa-4x"></i>
          <p>2000</p>
          <p>Laki-Laki</p>
        </div>
        <div class="text-center icon">
          <i class="fa-solid fa-person-dress fa-4x"></i>
          <p>2000</p>
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

  <!-- start sotk -->

  <div class="jumbotron-sotk">
    <div class="container">
      <div class="header text-center">
        <h1>SOTK</h1>
        <p class="text-black">Struktur Organisasi dan Tata kerja Pemerintah Desa Jatitujuh Kecamatan Jatitujuh Kabupaten Majalengka Provinsi Jawa Barat</p>
        <hr />
      </div>
      <div class="d-flex justify-content-center">
        <div class="group-profile" data-aos="fade-right" data-aos-duration="1000">
          <img class="img-fluid" src="/img/foto.png" alt="">
        </div>
        <div class="group-profile" data-aos="fade-up" data-aos-duration="1000">
          <img class="img-fluid" src="/img/foto.png" alt="">
        </div>
        <div class="group-profile" data-aos="fade-up" data-aos-duration="1000">
          <img class="img-fluid" src="/img/foto.png" alt="">
        </div>
        <div class="group-profile" data-aos="fade-left" data-aos-duration="1000">
          <img class="img-fluid" src="/img/foto.png" alt="">
        </div>
      </div>
      <div class="box-detail">
        <a href="#">Selengkapnya</a>
      </div>
    </div>
  </div>

  <!-- end sotk -->

  <!-- start layanan publik -->

  <div class="jumbotron-layanan">
    <div class="container">
      <div class="header-layanan">
        <h1 class="text-center">Layanan Publik</h1>
        <hr>
      </div>
      <div class="row row-1 mt-5">
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-brands fa-whatsapp fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>SURAT ONLINE</h4>
          <P class="text-dark">buat surat online cepat via whatsapp</P>
        </div>
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
            <i class="fa-solid fa-car fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>MOBIL SIAGA</h4>
          <P class="text-dark">Kontak mobil siaga bagi warga yang membutuhkan</P>
        </div>
      </div>
      <div class="row row-2 mt-5">
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-solid fa-phone fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>HELLO BUPATI</h4>
          <P class="text-dark">Ruang aduan, aspirasi, permintaan informasi kabupaten majalengka</P>
        </div>
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-regular fa-address-book fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>KEPENDUDUKAN ONLINE</h4>
          <P class="text-dark">Layanan administrasi kependudukan online disdukcapil majalengka</P>
        </div>
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-solid fa-house fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>CEK PBB</h4>
          <P class="text-dark">Cek data PBB online</P>
        </div>
        <div class="col-sm-1 text-end">
          <a href="#">
            <i class="fa-solid fa-house-chimney-window fa-2x"></i>
          </a>
        </div>
        <div class="col-sm-2">
          <h4>CEK BPUM</h4>
          <P class="text-dark">Cek data penerima UMKM</P>
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

        </div>
      </div>
    </div>
  </div>

  <!-- end peduli lindungin -->

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
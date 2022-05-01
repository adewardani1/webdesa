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
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/desajatituju.jpg" class="img-size d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/WhatsApp Image 2022-04-26 at 21.29.46.jpeg" class="img-size d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/WhatsApp Image 2022-04-26 at 21.30.05.jpeg" class="img-size d-block w-100" alt="...">
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
    <div class="d-flex justify-content-center">
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
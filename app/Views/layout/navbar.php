<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-nav">
    <div class="container py-4">
        <img src="/img/logo-desajatituju.png" width="45px" height="60px" alt="" srcset="">
        <p class="box-title-desa">
            <span class="desa-1">DESA JATITUJUH</span><br>
            <span class="desa-2">KECAMATAN JATITUJUH</span><br>
            <span class="desa-3">KABUPATEN MAJALENGKA</span>
        </p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/'); ?>">HOME</a>
                </li>
                <div class="dropdown">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">PROFILE</a>
                        <ul class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('sejarah-desa'); ?>">Sejarah Desa</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('pemerintahan-desa'); ?>">Pemerintahan Desa</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('visi-misi'); ?>">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('demografi'); ?>">Demografi</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('kelembagaan'); ?>">Kelembagaan</a></li>
                        </ul>
                    </li>
                </div>
                <div class="dropdown">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">INFORMASI PUBLIK</a>
                        <ul class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('news'); ?>">Berita</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('event'); ?>">Event</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('galeri'); ?>">Galeri</a></li>
                        </ul>
                    </li>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pengumuman/'); ?>">PENGUMUMAN</a>
                </li>
                <div class="dropdown">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">HELLO DESA</a>
                        <ul class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('kontak/'); ?>">Kontak</a></li>
                            <li><a class="dropdown-item" href="#">Laporan Terkini</a></li>
                        </ul>
                    </li>
                </div>
                <li class="nav-item">
                    <a class="nav-link">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-circle-exclamation"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
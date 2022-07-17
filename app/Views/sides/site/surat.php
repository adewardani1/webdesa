<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('img/logo-desajatituju.png'); ?>">
    <title>Desa Jatitujuh</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/90be7449aa.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

    <!-- Jumbotron -->

    <section>
        <div class="container">

        </div>
    </section>

    <!-- Akhir jumbotron -->

    <section class="genre" id="genre">
        <div class="container" data-aos="fade-right" data-aos-duration="1500">
            <div class="header text-center">
                <h1 class="mt-5">Pelayanan Surat Online</h1>
                <h2><a href="<?php echo base_url('/'); ?>">Desa Jatitujuh</a></h2>
            </div>
            <div class="row">
                <div class="col-md-10  mt-5">
                    <h4 class="title text-left">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan
                    </h4>
                </div>
            </div>
            <div class="form">
                <form action="<?php echo base_url('surat/submit'); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIK</label>
                                <input type="text" name="nik" onkeypress="return isNumberKey(event)" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Pilih Jenis Surat</label>
                                <select name="jenis" class="form-select form-select" id="exampleSelectBorderWidth2">
                                    <option disabled selected></option>
                                    <option value="usaha">Surat Keterangan Usaha</option>
                                    <option value="tidak_mampu">Surat Keterangan Tidak Mampu</option>
                                    <option value="miskin">Surat Keterangan Miskin</option>
                                    <option value="belum_pernah_menikah">Surat Keterangan Belum Pernah Menikah</option>
                                    <option value="kelahiran">Surat Keterangan Kelahiran</option>
                                    <option value="kematian">Surat Keterangan Kematian</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Kirim Permohonan</button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <a href="<?php echo base_url('pengumuman/'); ?>"><button class="btn btn-primary">Kembali</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
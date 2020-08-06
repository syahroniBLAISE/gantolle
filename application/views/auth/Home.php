<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= $title; ?></title>

  <!-- Font Awesome Icons -->
  <link href="<?= base_url('assets/'); ?>vendorHome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<?= base_url('assets/'); ?>vendorHome/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?= base_url('assets/'); ?>css/creative.min.css" rel="stylesheet">

  <style type="text/css">
    .container-nav {
      display: grid;
    }

    .nav-utama div {
      padding: 200px;
    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->


  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">SIPATUANG HANGGLIDING CLUB </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url('auth/pilihan/Admin'); ?>" target='_blank'>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#artikel" target='_blank'>Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>





  <!-- naigasi artikel 1 -->

  <!-- 
  <div class="nav-artikel">
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
  </div> -->

  <!-- naigasi artikel 2 -->
  </div>




  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">

        <?= $this->session->flashdata('pesan'); ?><br>


      </div>
      <!-- <h5><span class="badge badge-primary">JUMLAH PESERTA SAMPAI SAAT INI</span></h5><br>  
        <h1><span class="badge badge-secondary"><?= $count; ?></span></h1> -->
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row">

        <div class="col-2">
          <li>4</li>
          <li>5</li>
          <li>6</li>
        </div>


        <div class="col-10">

          <div class="row justify-content-center">
            <div class="col text-center">
              <br>
              <h2 class="text-black mt-0">PENDAFTARAN PESERTA KEJURNAS GANTOLLE SERI 1 KTM</h2>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="<?= base_url('auth/pilihan/peserta'); ?>" target="_blank">DAFTAR</a>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="<?= base_url('Pendaftaran/download/undangan'); ?>">Download Undangan Kejurnas</a>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="<?= base_url('Pendaftaran/show_data_peserta'); ?>" target="_blank">Daftar Peserta Kejurnas</a>
              <br>
              <?= $artikel[0]['artikel'];  ?>
            </div>
          </div>

        </div>

        <div class="co-2">
          <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
          </ul>
        </div>

      </div>
    </div>
  </section>


  <!-- <div style="text-align:justify;">
          <h4 class="text-white" >
          Kejuaraan Nasional Gntolle Seri 1 Ketepatan Mendarat (KTM) dalam ivent Bupati Padang Pariaman Cup  2020 yang dilaksanakan pada tanggal 6 s/d 8 Maret 2020, di 'DESA KANTER' - Kab. Padang Pariaman yang berlokasi dekat dengan jalan menuju Bandara Minang Kabau - Sumatera Barat, Kejuaraan Kali ini Akan di meriahkan oleh atlet Gantolle (Hanggliding) yang berasal dari seluruh indonesia.
          <br>
          <br>
          Pepatah Mengatakan Tak kenal maka tak sayang oleh sebab itu berikut sedikit cerita tentang padang pariaman di mana kejuaraan ini berlansung :
          <br>
          <br>
          Padang Pariaman adalah sebuah kabupaten di provinsi Sumatra Barat, Indonesia. yang memiliki Moto "Saiyo Sakato" yang artinya "seiya dan sekata", dulunya Buya Hamka pernah Mengatakan, nama kabupaten ini sendiri berasal dari kata dalam bahasa arab,”barri aman” kurang lebih memiliki arti: “tanah daratan yang aman sentosa”.dan dalam literatur lain, kata Pariaman kadang juga dianggap berasal dari “parik nan aman”, yang artinya kira-kira pelabuhan yang aman. Kapal-kapal yang singgah untuk berdagang di bandar-bandar di Rantau Pariaman dapat dengan aman bertransaksi dagang .

          <br>
         </h4>
        </div> -->




  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/'); ?>img/portfolio/fullsize/1.JPG">
            <img class="img-fluid" src="<?= base_url('assets/'); ?>img/portfolio/thumbnails/1.JPG" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">

              </div>
              <div class="project-name">
                Lihat Gambar
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/'); ?>img/portfolio/fullsize/2.JPG">
            <img class="img-fluid" src="<?= base_url('assets/'); ?>img/portfolio/thumbnails/2.JPG" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">

              </div>
              <div class="project-name">
                Lihat Gambar
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/'); ?>img/portfolio/fullsize/3.JPG">
            <img class="img-fluid" src="<?= base_url('assets/'); ?>img/portfolio/thumbnails/3.JPG" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">

              </div>
              <div class="project-name">
                Lihat Gambar
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/'); ?>img/portfolio/fullsize/4.JPG">
            <img class="img-fluid" src="<?= base_url('assets/'); ?>img/portfolio/thumbnails/4.JPG" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">

              </div>
              <div class="project-name">
                Lihat Gambar
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/'); ?>img/portfolio/fullsize/5.JPG">
            <img class="img-fluid" src="<?= base_url('assets/'); ?>img/portfolio/thumbnails/5.JPG" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">

              </div>
              <div class="project-name">
                Lihat Gambar
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/'); ?>img/portfolio/fullsize/6.JPG">
            <img class="img-fluid" src="<?= base_url('assets/'); ?>img/portfolio/thumbnails/6.JPG" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">

              </div>
              <div class="project-name">
                Lihat Gambar
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 text-center">
          <h2 class="mt-0">CONTACT</h2>

          <p class="text-muted mb-5">Untuk Info Lebih Lanjut Dapat Dihubungi Nomor panitia di bawah</p>
          <i class="fab fa-whatsapp-square fa-3x  "></i>
          <i class="fas fa-phone-square fa-3x  "></i>
          <ul class="list-group">
            <li class="list-group-item"><a target="_BLANK" href="https://api.whatsapp.com/send?phone=6282390925084">
                <font color></font>Khaidir: anas 0823 9092 5084
              </a></li>
            <li class="list-group-item"><a target="_BLANK" href="https://api.whatsapp.com/send?phone=6285760829759">Lusman:0857 6082 9759</a></li>
            <li class="list-group-item"><a target="_BLANK" href="https://api.whatsapp.com/send?phone=62823 8745 4715">Lidia: 0823 8745 4715</a></li>
          </ul>
          <h2 class="mt-0">INSTAGRAM</h2>
          <p class="text-muted mb-5">
            <font color="red">Klik Tombol IG di bawah</font>
          </p>
          <a href="https://www.instagram.com/padang_pariaman_cup/"><i class="fab fa-instagram-square fa-7x "></i></a>






          <!-- https://www.instagram.com/p/B8y9vHqnouD/?utm_source=ig_web_copy_link -->
        </div>
      </div>
    </div>

  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">
        <span>Copyright &copy; SYAHRONI <?= date('Y'); ?></span>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/'); ?>vendorHome/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendorHome/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url('assets/'); ?>vendorHomevendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendorHomevendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

  <script src="https://kit.fontawesome.com/fc29efc139.js" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Inventory Barang Gudang">
  <meta name="author" content="Jonathan dan Raffael">

  <title>Sistem Inventory Gudang</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts (FontAwesome) -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->
  <link href="css/tampilan.css" rel="stylesheet">

  <!-- Inline CSS -->
  <style>
    /* Global Styles */
    body {
      font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      overflow-x: hidden;
    }
    
    /* --- NAVBAR CUSTOMIZATION (DIPERBAIKI) --- */
    .navbar-custom {
      background-color: #2c3e50;
      border: none;
      padding: 10px 0; /* Padding atas-bawah yang pas */
      transition: padding 0.3s;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1); /* Tambahan bayangan agar elegan */
    }
    
    .navbar-custom .navbar-brand {
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      letter-spacing: 1px;
      font-size: 24px;
      padding: 10px 15px; /* Menyesuaikan padding logo */
      height: auto; /* Agar tinggi fleksibel */
      line-height: 20px; /* Vertikal align text */
    }
    
    .navbar-custom .navbar-brand i {
      color: #3498db;
      margin-right: 8px;
    }
    
    .navbar-custom .navbar-brand:hover {
      color: #3498db;
    }

    /* Menu Links */
    .navbar-custom .nav li a {
      color: #ecf0f1;
      font-family: 'Montserrat', sans-serif;
      font-weight: 500;
      letter-spacing: 1px;
      text-transform: uppercase;
      font-size: 13px;
      padding: 15px 20px; /* Spasi antar menu */
      transition: all 0.3s ease;
    }

    .navbar-custom .nav li a:hover,
    .navbar-custom .nav li.active a {
      color: #3498db;
      background: transparent;
      transform: translateY(-2px); /* Efek naik sedikit saat hover */
    }

    /* Tombol Mobile (Hamburger) */
    .navbar-custom .navbar-toggle {
      border-color: #3498db;
      background-color: #34495e;
      margin-top: 5px;
    }
    
    .navbar-custom .navbar-toggle:hover,
    .navbar-custom .navbar-toggle:focus {
      background-color: #3498db;
    }

    .navbar-custom .navbar-toggle .icon-bar {
      background-color: white;
    }

    /* Header Carousel */
    .carousel-inner .item img {
      width: 100%;
      height: 650px;
      object-fit: cover;
      filter: brightness(50%);
    }
    .carousel-caption {
      bottom: 40%;
    }
    .carousel-caption h3 {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 48px;
      text-transform: uppercase;
      margin-bottom: 20px;
    }
    .carousel-caption p {
      font-size: 20px;
      font-weight: 300;
    }

    /* Section Global */
    section {
      padding: 100px 0;
    }
    .section-heading {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 15px;
      color: #333;
    }
    .section-subheading {
      font-family: 'Lato', sans-serif;
      font-size: 18px;
      font-style: italic;
      color: #777;
      margin-bottom: 60px;
    }

    /* Login Section */
    .btn-login-custom {
      padding: 15px 40px;
      border-radius: 50px;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 14px;
      margin: 10px;
      border: none;
      transition: all 0.3s;
    }
    .btn-admin {
      background-color: #3498db;
      color: white;
      box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
    }
    .btn-petugas {
      background-color: #f1c40f;
      color: white;
      box-shadow: 0 5px 15px rgba(241, 196, 15, 0.4);
    }
    .btn-login-custom:hover {
      transform: translateY(-3px);
      color: white;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .zero-panel-content {
      background: white;
      padding: 50px;
      border-radius: 15px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.05);
    }

    /* --- BAGIAN TENTANG (ABOUT) YANG BARU --- */
    #tentang {
      background-color: #f8f9fa; /* Warna background abu-abu sangat muda */
    }
    .about-box {
      background: white;
      padding: 40px 30px;
      border-radius: 10px;
      text-align: center;
      transition: all 0.3s ease-in-out;
      border-bottom: 4px solid transparent;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      margin-bottom: 30px;
      height: 100%;
    }
    .about-box:hover {
      transform: translateY(-10px); /* Efek naik saat hover */
      border-bottom: 4px solid #3498db;
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .about-icon {
      width: 80px;
      height: 80px;
      background: #eaf2f8;
      color: #3498db;
      border-radius: 50%;
      line-height: 80px;
      font-size: 32px;
      margin: 0 auto 25px;
      transition: all 0.3s;
    }
    .about-box:hover .about-icon {
      background: #3498db;
      color: white;
    }
    .about-title {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 20px;
      margin-bottom: 15px;
      color: #2c3e50;
    }
    .about-desc {
      color: #7f8c8d;
      line-height: 1.6;
      font-size: 15px;
    }
    .about-intro {
      font-size: 18px;
      line-height: 1.8;
      color: #555;
      margin-bottom: 50px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Footer */
    footer {
      background-color: #2c3e50;
      padding: 25px 0;
      color: white;
    }
    .social-buttons li a {
      display: block;
      width: 40px;
      height: 40px;
      border-radius: 100%;
      font-size: 20px;
      line-height: 40px;
      color: white;
      background-color: #222;
      transition: all 0.3s;
    }
    .social-buttons li a:hover {
      background-color: #3498db;
    }
  </style>
</head>

<body id="page-top" class="index">

  <!-- NAVBAR -->
  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#page-top"><i class="fa fa-cubes"></i> JR STORAGE</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden"><a href="#page-top"></a></li>
          <li class="page-scroll"><a href="#beranda">Beranda</a></li>
          <li class="page-scroll"><a href="#login">Masuk</a></li>
          <li class="page-scroll"><a href="#tentang">Tentang</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER / SLIDER -->
  <header id="beranda">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/gudang1.jpg" alt="Manajemen Gudang">
          <div class="carousel-caption">
            <h3>Sistem Terintegrasi</h3>
            <p>Mengelola alur barang masuk dan keluar dalam satu platform.</p>
          </div>
        </div>
        <div class="item">
          <img src="images/gudang2.jpg" alt="Monitoring Stok">
          <div class="carousel-caption">
            <h3>Monitoring Real-Time</h3>
            <p>Pantau ketersediaan stok kapan saja dan di mana saja.</p>
          </div>
        </div>
        <div class="item">
          <img src="images/gudang3.png" alt="Laporan Akurat">
          <div class="carousel-caption">
            <h3>Efisiensi Bisnis</h3>
            <p>Data akurat untuk mendukung pengambilan keputusan.</p>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- LOGIN SECTION -->
  <section id="login" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Portal Akses</h2>
          <h3 class="section-subheading text-muted">Silakan masuk sesuai dengan hak akses yang Anda miliki.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="zero-panel-content text-center">
            <i class="fa fa-id-card-o fa-5x" style="color: #34495e; margin-bottom: 25px;"></i>
            <p class="text-muted" style="margin-bottom: 30px;">
              Selamat datang di Sistem Inventory JR Storage. <br>Demi keamanan data, harap pastikan akun Anda tidak digunakan oleh pihak lain.
            </p>
            <a href="admin/login.php" target="_blank">
              <button class="btn btn-login-custom btn-admin">
                <i class="fa fa-lock"></i> LOGIN ADMIN
              </button>
            </a>
            <a href="petugas/login_petugas.php" target="_blank">
              <button class="btn btn-login-custom btn-petugas">
                <i class="fa fa-users"></i> LOGIN PETUGAS
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TENTANG SECTION (YANG BARU) -->
  <section id="tentang">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Mengapa JR Storage?</h2>
          <h3 class="section-subheading text-muted">Solusi cerdas untuk manajemen logistik perusahaan modern.</h3>
        </div>
      </div>

      <!-- Intro Text -->
      <div class="row">
        <div class="col-lg-12 text-center">
          <p class="about-intro">
            JR Storage adalah platform manajemen inventaris berbasis web yang dirancang untuk menyederhanakan kompleksitas gudang. 
            Kami mengubah pencatatan manual yang rentan kesalahan menjadi sistem digital yang otomatis, cepat, dan transparan.
          </p>
        </div>
      </div>

      <!-- 3 Fitur Utama (Cards) -->
      <div class="row">
        <!-- Fitur 1 -->
        <div class="col-md-4">
          <div class="about-box">
            <div class="about-icon">
              <i class="fa fa-bolt"></i>
            </div>
            <h4 class="about-title">Cepat & Real-Time</h4>
            <p class="about-desc">
              Pencatatan barang masuk dan keluar terjadi secara instan. 
              Stok gudang terupdate otomatis tanpa perlu rekap ulang manual di akhir hari.
            </p>
          </div>
        </div>
        <!-- Fitur 2 -->
        <div class="col-md-4">
          <div class="about-box">
            <div class="about-icon">
              <i class="fa fa-shield"></i>
            </div>
            <h4 class="about-title">Aman & Terkontrol</h4>
            <p class="about-desc">
              Setiap transaksi tercatat dengan detail user (Admin/Petugas). 
              Meminimalisir risiko kehilangan barang dan manipulasi data stok.
            </p>
          </div>
        </div>
        <!-- Fitur 3 -->
        <div class="col-md-4">
          <div class="about-box">
            <div class="about-icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <h4 class="about-title">Laporan Akurat</h4>
            <p class="about-desc">
              Hasilkan laporan inventory yang presisi hanya dengan sekali klik. 
              Membantu manajemen dalam mengambil keputusan bisnis yang tepat.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; JR Storage <script>document.write(new Date().getFullYear());</script></span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li><a href="#" style="color:#bdc3c7">Privacy Policy</a></li>
            <li><a href="#" style="color:#bdc3c7">Terms of Use</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="vendor/css/js/bootstrap.min.js"></script>
  <!-- Script Smooth Scroll -->
  <script>
    $(function() {
      $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
      });
    });
  </script>

</body>
</html>
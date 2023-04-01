<?php
include('include/include.php');
session_start();
$result = "";
if (!isset($_SESSION['idUser'])) {
  $output = "<button class='login-nav'><a href='auth/login.php'>Fazer Login</a></button>";
} else {


  $sql = mysqli_query($conn, "SELECT * FROM users WHERE idUser = " . $_SESSION['idUser']);
  $row = mysqli_fetch_assoc($sql);
  $sql02 = mysqli_query($conn, "SELECT * FROM users WHERE idUser = " . $_SESSION['idUser'] . " AND isCargo = 'admin'");
  if (mysqli_num_rows($sql02)) {
    $result = "<li><a class='nav-link scrollto' href='./admin/index.php'>Admin</a></li>";
  }
  $output = "  <a class='nav-link' href='profile/profile.php'>
    <img src='images-user/" . $row['img'] . "' alt='' width='40px' height='40px'
        style='border-radius: 100%'>
</a>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EEEPBooks - Página Principal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">

        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#podium">Rank</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nós</a></li>
          <li><a class="nav-link scrollto" href="#">Acervo de Livros</a></li>
          <?php echo $result; ?>
        </ul>
        <?php echo $output; ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Plataforma de biblioteca <span>E.E.E.P. Plácido Aderaldo Castelo</span></h1>
            <!-- <h2>A biblioteca virtual oferece acesso a uma vasta coleção de livros e recursos online</h2> -->
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Acessar acervo de livros</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="row" data-aos="fade-up">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Leitores</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Livros</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Categorias de livro</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>funcionarios</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <main id="main">
    <!-- ======= Podium Section ======= -->
    <section id="podium" class="podium">
      <div class="container">
        <div class="row justify-content-center">
          <div class="section-title" data-aos="fade-up">
            <h2>Rank</h2>
            <p>Rank dos Leitores</p>
          </div>
          <div class=" podium-div" data-aos="fade-up">
            <div class="listaleitores">
              <div class="leitores">
                <div class="leitor-nome">
                  <img src="assets/img/gallery/gallery-1.jpg" alt="">
                  <div class="leitor-title">
                    <strong>Luiz Gustavo</strong>
                    <p>Curso: Administração</p>
                  </div>
                </div>
                <div class="leitor-pontuacao">
                  <strong>12</strong>
                </div>
              </div>
              <div class="leitores">
                <div class="leitor-nome">
                  <img src="assets/img/gallery/gallery-1.jpg" alt="">
                  <div class="leitor-title">
                    <strong>Luiz Gustavo</strong>
                    <p>Curso: Administração</p>
                  </div>
                </div>
                <div class="leitor-pontuacao">
                  <strong>12</strong>
                </div>
              </div>
              <div class="leitores">
                <div class="leitor-nome">
                  <img src="assets/img/gallery/gallery-1.jpg" alt="">
                  <div class="leitor-title">
                    <strong>Luiz Gustavo</strong>
                    <p>Curso: Administração</p>
                  </div>
                </div>
                <div class="leitor-pontuacao">
                  <strong>12</strong>
                </div>
              </div>
              <div class="leitores">
                <div class="leitor-nome">
                  <img src="assets/img/gallery/gallery-1.jpg" alt="">
                  <div class="leitor-title">
                    <strong>Luiz Gustavo</strong>
                    <p>Curso: Administração</p>
                  </div>
                </div>
                <div class="leitor-pontuacao">
                  <strong>12</strong>
                </div>
              </div>
              <div class="leitores">
                <div class="leitor-nome">
                  <img src="assets/img/gallery/gallery-1.jpg" alt="">
                  <div class="leitor-title">
                    <strong>Luiz Gustavo</strong>
                    <p>Curso: Administração</p>
                  </div>
                </div>
                <div class="leitor-pontuacao">
                  <strong>12</strong>
                </div>
              </div>
            </div>
            <div class="top">
              <div class="rank2 rank">
                <img src="assets/img/team/team-2.jpg" alt="">
                <div class="podiumrank2">2</div>
              </div>

              <div class="rank1 rank">
                <img src="assets/img/team/team-1.jpg" alt="">
                <div class="podiumrank1">1</div>
              </div>

              <div class="rank3 rank">
                <img src="assets/img/team/team-3.jpg" alt="">
                <div class="podiumrank3">3</div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section><!-- End Podium Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>GALERIA</h2>
          <p>Fotos da Biblioteca</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <section id="about" class="about">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Funcionario</h2>
          <p>sobre darlan</p>
        </div>
        <div class="about-div" data-aos="fade-up">
          <div class="about-text">
            <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, laborum?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, id.</p>
          </div>
          <div class="about-img">
            <img src="assets/img/hero-img.png" alt="">
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>EEEPBooks</h3>
              <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em>
              </p>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links Úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Início</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rank</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Galeria</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acervo Livros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mural do Darlan</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Catalogo Livros</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ação</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cursos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ficção</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Romance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Literatura</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Caixa Sugestão</h4>
            <p>Deixe sua sugestão para melhorar a experiência..</p>
            <form action="" method="post">
              <input type="text" name="email"><input type="submit" value="Enviar">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ToUp</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
session_start();
if (isset($_SESSION['idUser'])) {
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EEEPBooks - Cadastro</title>
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
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent"
        style="background-color: #dbd1b3">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">

                <a href="../index.php"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#podium">Rank</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#gallery">Galeria</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#about">Sobre nós</a></li>
                    <li><a class="nav-link scrollto" href="../acervo.php">Acervo de Livros</a></li>
                </ul>
                <button class="login-nav"><a class="" href="auth/login.php">Fazer Login</a></button>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <div class="login" style='margin-bottom: 100px'>
        <div class="content">
            <div class="login-page">
                <div class="form" id="sd">
                    <form action="">
                        <div class="title">
                            <h2>Fazer Cadastro</h2>
                        </div>
                        <div class="errortxt"></div>
                        <input type="text" name="nome" placeholder="Nome" />
                        <select name="curso" id="">
                            <option value="Informática">Informática</option>
                            <option value="Agroindustria">Agroindustria</option>
                            <option value="Adminstração">Adminstração</option>
                        </select>
                        <select name="ano" id="">
                            <option value="1º Ano">1º Ano</option>
                            <option value="2º Ano">2º Ano</option>
                            <option value="3º Ano">3º Ano</option>
                        </select>
                        <input type="email" name="email" placeholder="E-mail" />
                        <input type="password" name="senha" placeholder="Senha" />
                        <div class="input-file">
                            <div class="button-wrapper">
                                <span class="label">
                                    Foto de Perfil
                                </span>
                                <input type="file" name="image" id="upload" class="upload-box"
                                    placeholder="Upload File">
                            </div>
                            <div class="text-input">
                                <p>Mande no maximo 10 mb, sendo jpg ou png</p>
                            </div>
                        </div>

                        <button>Enviar</button>
                        <p class="message">Ja tenho uma conta <a href="login.php">Fazer login</a></p>
                    </form>
                </div>
            </div>
            <div class="login-img">
                <img src="../assets/img/kk.png" alt="">
            </div>

        </div>
    </div>


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>EEEPBooks</h3>
                            <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam
                                    excepturi quod.</em>
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
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/register.js"></script>
</body>

</html>
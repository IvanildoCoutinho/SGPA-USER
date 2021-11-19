<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $title ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= assets("vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?= assets("vendor/icofont/icofont.min.css") ?>" rel="stylesheet">
    <link href="<?= assets("vendor/aos/aos.css") ?>" rel="stylesheet">
    <link href="<?= assets("vendor/line-awesome/css/line-awesome.min.css") ?>" rel="stylesheet">
    <link href="<?= assets("font-awesome/css/fontawesome-all.min.css") ?>" rel="stylesheet">
    <link href="<?= assets("vendor/owl.carousel/assets/owl.carousel.min.css") ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= assets("css/style.css") ?>" rel="stylesheet">
</head>

<body>
<!-- ======= Mobile Menu ======= -->
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<!-- ======= Header ======= -->
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-4 col-lg-2">
                <h1 class="mb-0 site-logo">
                    <a href="<?= $router->route("web.index") ?>" class="mb-0">
                        <img src="<?= assets("img/logo/logo1.png") ?>" class="logo"
                             style="width: 240px ; height: 60px; ">
                    </a>
                </h1>
            </div>

            <div class="col-12 col-md-10 d-none d-lg-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li>
                            <a href="<?= $router->route("web.index") ?>" class="nav-link">Inicio</a
                        </li>
                        <li class="active">
                            <a href="<?= $router->route("web.request") ?>" class="nav-link">Pedidos</a>
                        </li>
                        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">
                            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
                               data-target="#main-navbar">
                                <span></span>
                            </a>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
</header>

    <?= $this->section("body") ?>


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="<?= assets("js/mdb.min.css") ?>"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
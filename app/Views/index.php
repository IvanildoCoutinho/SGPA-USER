<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=   $title  ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=assets("vendor/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">
  <link href="<?=assets("vendor/icofont/icofont.min.css")?>" rel="stylesheet">
  <link href="<?=assets("vendor/aos/aos.css")?>" rel="stylesheet">
  <link href="<?=assets("vendor/line-awesome/css/line-awesome.min.css")?>" rel="stylesheet">
  <link href="<?=assets("vendor/owl.carousel/assets/owl.carousel.min.css")?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=assets("css/style.css")?>" rel="stylesheet">
<!--    <link href="--><?//=assets("css/mdb.min.css")?><!--" rel="stylesheet">-->

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

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">SoftLand</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="<?= $router->route("web.index") ?>" class="nav-link">Inicio</a></li>
              <li><a href="<?= $router->route("web.request") ?>" class="nav-link">Pedidos</a></li>
              <li><a href="#" class="nav-link">Contact</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-7 text-center text-lg-left">
              <h1 data-aos="fade-right">Sistema de Pedido de documentos</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">
                Agora ja podes fazer pedido dos teus documentos academicos sem sair de casa e fazer acompanhamento do seu processo. </p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="<?= $router->route("web.request") ?>" class="btn btn-outline-white">Ver Pedidos</a></p>
            </div>
            <br>
            <div class="col-lg-5 mt-5 iphone-wrap">
              <img src="assets/img/paper.png" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="assets/img/paper.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Faça o seu Pedido abaixo</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-10 mx-auto" data-aos="fade-up" data-aos-delay="">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Selecione o documento</label>
              <select class="form-control rounded shadow-sm text-capitalize" id="exampleFormControlSelect1">
                <?php
                foreach ($docs as $doc ): ?>
                <option ><?= $doc->name?></option>
                  <?php endforeach; ?>

              </select>
            </div>
          </div>

          <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="">
            <div class="form-group">
              <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#myModal1" >Fazer o Pedido</button>
            </div>
          </div>


        </div>

      </div>

        <div class="modal fade modal-primary" id="myModal1" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="modal-title ">
                            <h4 class="text-primary">Introduza os dados do seu pedido</h4>
                        </div>
                    </div>
                    <div class="modal-body text-center mt-1">
                        <form>
                            <div class="form-row ">
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm"  name="fname"  placeholder="Nome">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="lname" placeholder="Apelido">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="code" placeholder="Codigo de Aluno">
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col-7">
                                    <input type="text" class="form-control rounded shadow-sm" name="course" placeholder="Curso">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="grade" placeholder="Ano">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="phone" placeholder="telefone">
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col-12">
                                    <label class="text-primary">Selecione o Documento</label>
                                    <select class="form-control rounded shadow-sm text-capitalize" id="exampleFormControlSelect1">
                                        <?php
                                        foreach ($docs as $doc ): ?>
                                            <option value="<?= $doc->id ?>" ><?= $doc->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <br>
                            <!-- Request button -->

                                <div class="col-lg-12 text-center mt-5" data-aos="fade-up" data-aos-delay="">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary">Fazer o Pedido</button>
                                    </div>"


                                </div>

                                <br>



                        </form>

                    </div>
                </div>
            </div>
        </div>




    </section>

    <section class="hero-section" id="hero">

      <div class="wave">

        <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row mt-md-5">
          <div class="col-12 hero-text-image">
            <div class="row">
              <div class="col-lg-12 text-lg-center ">
                <h1 data-aos="fade-up">O NOSSO PROCESSO</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="item first mb-md50" data-aos="fade-right">
                  <img src="assets/img/arrow.png" class="text-center  align-content-lg-center" style=" width: 20px ; height: 20px  ;" alt="">
                  <span class="icon icon-basic-lightbulb"></span>
                  <div class="card  shadow-sm p-3 text-center " style="border-radius:20px;">
                    <h3>01</h3>
                    <h6>Ideias</h6>
                    <p class="text-primary">Este é o primeiro passo para realização de qualquer projecto</p>
                  </div>

                </div> </div>
              <div class="col-md-6 col-lg-3 ">
                <div class="item first mb-md50 " data-aos="fade-right">
                  <img src="assets/img/arrow.png" class="text-center align-content-lg-center" style=" width: 20px ; height: 20px ;" alt="">
                  <span class="icon icon-basic-lightbulb"></span>
                  <div class="card  shadow-sm p-3 text-center " style="border-radius:20px;">
                    <h3>01</h3>
                    <h6>Ideias</h6>
                    <p class="text-primary">Este é o primeiro passo para realização de qualquer projecto</p>
                  </div>

                </div> </div>
              <div class="col-md-6 col-lg-3">
                <div class="item first mb-md50" data-aos="fade-right">
                  <img src="assets/img/arrow.png" style=" width: 20px ; height: 20px ;" alt="">
                  <span class="icon icon-basic-lightbulb"></span>
                  <div class="card  shadow-sm p-3 text-center " style="border-radius:20px;">
                    <h3>01</h3>
                    <h6>Ideias</h6>
                    <p class="text-primary">Este é o primeiro passo para realização de qualquer projecto</p>
                  </div>

                </div> </div>
              <div class="col-md-6 col-lg-3">
                <div class="item first mb-md50" data-aos="fade-right">
                  <img src="assets/img/arrow.png" style=" width: 20px ; height: 20px ;" alt="">
                  <span class="icon icon-basic-lightbulb"></span>
                  <div class="card  shadow-sm p-3 text-center " style="border-radius:20px;">
                    <h3>01</h3>
                    <h6>Ideias</h6>
                    <p class="text-primary">Este é o primeiro passo para realização de qualquer projecto</p>
                  </div>

                </div> </div>


            </div>
          </div>
        </div>
      </div>

    </section><!-- End Hero -->


    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 mr-auto">
            <h2 class="mb-4">Seamlessly Communicate</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
              laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
              dolore mollitia esse natus beatae.</p>
            <p><a href="#" class="btn btn-primary">Download Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="assets/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ml-auto order-2">
            <h2 class="mb-4">Gather Feedback</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
              laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
              dolore mollitia esse natus beatae.</p>
            <p><a href="#" class="btn btn-primary">Download Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="assets/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>


    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
            <h2>Starts Publishing Your Apps</h2>
          </div>
          <div class="col-md-5 text-center text-md-right">
            <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About SoftLand</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
            dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
          <p class="social">
            <a href="#"><span class="icofont-twitter"></span></a>
            <a href="#"><span class="icofont-facebook"></span></a>
            <a href="#"><span class="icofont-dribbble"></span></a>
            <a href="#"><span class="icofont-behance"></span></a>
          </p>
        </div>
        <div class="col-md-7 ml-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Downloads</h3>
              <ul class="list-unstyled">
                <li><a href="#">Get from the App Store</a></li>
                <li><a href="#">Get from the Play Store</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?= assets("js/mdb.min.css")?>"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
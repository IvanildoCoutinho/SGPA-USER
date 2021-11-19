<?php $this->layout("template", compact("title")) ?>

<?php $this->start("body") ?>
    <main id="main">
        <div class="hero-section inner-page">
            <div class="wave">

                <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1"
                     xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                                  id="Path"></path>
                        </g>
                    </g>
                </svg>

            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center hero-text">
                                <h1 data-aos="fade-up" data-aos-delay="">Pedidos</h1>
                                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    Faça rastreio e verifique o estado dos seus pedidos
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <section class="section">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-7 mb-5">
                        <h2 class="section-heading">Verifique o estado do seu pedido</h2>
                    </div>
                </div>

                <form action="<?= $router->route("request.track") ?>" method="POST">

                    <div class="row">
                        <div class="col-lg-10 mx-auto text-dark" data-aos="fade-up" data-aos-delay="">
                            <div class="form-group">
                                <label>Código de pedido (ex: 344598)</label>
                                <input type="text" name="request_id" class="form-control rounded shadow-sm">
                            </div>
                            <div class="form-group">
                                <label>Número de telefone</label>
                                <input type="text" name="phone" class="form-control rounded shadow-sm">
                            </div>
                        </div>

                        <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    Verificar &nbsp;<i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </section>
    </main>

<?php $this->end(); ?>
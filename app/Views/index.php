<?php $this->layout("template", compact("title")); ?>

<?php $this->start("body"); ?>

<section class="hero-section" id="hero">
    <div class="wave">
        <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                          id="Path"></path>
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
                            Agora ja podes fazer pedido dos teus documentos academicos sem sair de casa e fazer
                            acompanhamento do seu processo. </p>
                        <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a
                                    href="<?= $router->route("web.request") ?>" class="btn btn-outline-white">Ver
                                Pedidos</a></p>
                    </div>
                    <br>
                    <div class="col-lg-5 mt-5 iphone-wrap">
                        <img src="assets/img/paper.png" alt="Image" class="phone-1" data-aos="fade-right">
                        <img src="assets/img/paper.png" alt="Image" class="phone-2" data-aos="fade-right"
                             data-aos-delay="200">
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
                            foreach ($docs as $doc): ?>
                                <option><?= $doc->name ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                </div>

                <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#myModal1">Fazer o Pedido
                        </button>
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
                        <form action="<?= $router->route("request.make") ?>" method="POST">
                            <div class="form-row ">
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="fname"
                                           placeholder="Nome" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="lname"
                                           placeholder="Apelido" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="code"
                                           placeholder="Cod.Aluno" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col-7">
                                    <select class="form-control rounded shadow-sm" name="course" required>
                                        <option value="Contabilidade">Contabilidade</option>
                                        <option value="Construcao Civil">Construção Civil</option>
                                        <option value="Informatica">Informática</option>
                                        <option value="Gestao">Gestão</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="grade"
                                           placeholder="Ano" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded shadow-sm" name="phone"
                                           placeholder="Telefone" required>
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col-12">
                                    <label class="text-primary">Selecione o Documento</label>
                                    <select class="form-control rounded shadow-sm text-capitalize"
                                            id="exampleFormControlSelect1" name="doc_id" required>
                                        <?php
                                        foreach ($docs as $doc): ?>
                                            <option value="<?= $doc->id ?>"><?= $doc->name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="text-left text-dark pt-2">
                                        <p><b class="text-danger">Tempo:</b> <?= $docs[0]->time ?> dias<br>
                                            <b class="text-danger">Valor:</b> <?= number_format($docs[0]->price, 2, ",", ".") ?> MZN</p>
                                    </div>
                                </div>
                                <br>
                                <div class="col-lg-12 text-center mt-3" data-aos="fade-up" data-aos-delay="">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Confirmar <i class="fa fa-check-circle"></i></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->end(); ?>

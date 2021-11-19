<?php $this->layout("template", compact("title")) ?>

<?php $this->start("body") ?>
    <main id="main">
        <section class="section">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-7 mb-5">
                        <h2 class="section-heading text-danger">Pedido #<?= $request->id ?></h2>
                    </div>
                </div>

                <h4>Estado do Pedido:
                    <span class="text-danger">
                        <?=
                        match ($request->status) {
                            "1" => "Aguardar pagamento",
                            "2" => "A processar",
                            "3" => "Aguardar recolha",
                        };
                        ?>
                    </span>
                </h4>

                <div class="row justify-content-center pt-5">
                    <div class="col-lg-4 col-md-6 col-sm-6 pt-3 text-dark">
                        <h5><strong><i class="fa fa-user-graduate"></i> Dados do aluno</strong></h5>
                        <div class="pt-4">
                            <p><b>Codigo Estudante:</b> <?= $request_data->code ?></p>
                            <p><b>Nome:</b> <?= $request_data->fname ?> <?= $request_data->lname ?></p>
                            <p><b>Curso:</b> <?= $request_data->course ?> - <?= $request_data->grade ?>
                                <sup>o</sup>
                                ano</p>
                            <p><b>Contacto:</b> +258 <?= $request_data->phone ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pt-3 text-dark">
                        <h5><strong><i class="fa fa-file"></i> Dados do pedido</strong></h5>
                        <div class="pt-4">
                            <p><b>Documento:</b> <?= $doc->name ?></p>
                            <p><b>Descrição:</b> <?= $doc->description ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pt-3 text-dark">
                        <h5><strong><i class="fa fa-dollar-sign"></i> Dados de pagamento</strong></h5>
                        <div class="pt-4">
                            <p><b>Entidade:</b> <?= PAY_ENTITY ?></p>
                            <p><b>Referencia:</b> <?= $request_data->pay_reference ?></p>
                            <p><b>Valor:</b> <?= number_format($doc->price, 2, ",", ".") ?> MZN</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

<?php $this->end(); ?>
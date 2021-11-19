<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>SGPA - Pedido <?= $request_id ?></title>
    <link href="<?= assets('css/mdb.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;1,500;1,700&display=swap"
          rel="stylesheet">
    <style>
        body {
            font-family: "Montserrat";
            color: #000000;
            font-size: 16px;
        }
    </style>
</head>
<body onload="window.print()">
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <img src="<?= assets('img/logo/logo1.png') ?>" alt="" width="240px" height="80px">
            <h5 class="px-5 font-weight-bold pt-3">SGPA - Pedidos Academicos</h5>
        </div>
    </div>
    <div class="mt-4" style="border: 2px solid #000;">
        <h2 class="text-center text-danger pt-2"><b>Pedido N<sup>o</sup> <?= $request_id ?></b></h2>
    </div>

    <div class="row pt-5">
        <h4 class="text-center"><b>Dados do Estudante</b></h4>
        <div class="col">
            <p>
                <b>Codigo:</b> <?= $code ?> <br>
                <b>Curso:</b> <?= $course ?> - <?= $grade ?><sup>o</sup> ano
            </p>
        </div>
        <div class="col">
            <p>
                <b>Nome:</b> <?= $fname ?> <?= $lname ?><br>
                <b>Contacto:</b> +258 <?= $phone ?>
            </p>
        </div
    </div>

    <div class="pt-4">
        <table class="table table-borderless pt-2" style="font-size: 1.25rem">
            <thead style="border: 3px solid #000">
            <tr>
                <th scope="col">DESCRIÇÃO</th>
                <th class="text-right" scope="col">TOTAL</th>
            </tr>
            </thead>
            <tbody style="border: 3px solid #000;">
            <tr>
                <td><em><?= $document->name ?></em></td>
                <td align="right">
                    <b><?= number_format($document->price, 2, ",", ".") ?> MZN</b>
                </td>
            </tr>
            </tbody>
            <tfoot style="border: 3px solid #000;">
            <tr>
                <td colspan="1"><b>VALOR TOTAL A PAGAR</b></td>
                <td align="right"><b><?= number_format($document->price, 2, ",", ".") ?> MZN</b></td>
            </tr>
            </tfoot>
        </table>
    </div>

    <div class="pt-2" style="border: 2px solid #000000">
        <h5 class="text-dark"><b>Pagável via internet, depósito, transferências, celular ou outros meios para:</b></h5>
        <p>Entidade: <b>462622</b><br>
        Referência: <b><?= $pay_reference ?></b><br>
        Bancos: <b>Millennium BIM, BCI, Standard Bank, Moza Banco</b></p>
        <b class="text-danger">Após efectuar o pagamento, envie o respectivo comprovativo para proceder com a emissão do documento pedido</b>
    </div>

    <div class="row pt-4">
        <div class="col">
            <h5>Data:<?= $date_added ?></h5>
        </div>
    </div>

</div>
</body>
</html>
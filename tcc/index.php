<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
error_reporting(0);
include("conexão/conectar.php");
include_once 'produtoac.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quitutes</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/cart.css" rel="stylesheet">
</head>

<body>
</body>

</html>

<nav class="navbar navbar-expand-lg bg-body-tertiary"></nav>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/quitutes.png" alt="Bootstrap" width="85" height="75">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Novo Pedido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Meus Pedidos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active" href="#">Atualizar Dados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Sobre nós</a>
                </li>
            </ul>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-link" href="index.php?id=registrar" role="button">Criar Conta</a>
                <a class="btn btn-outline-danger" href="index .php?id=login" type="button">Login</a>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg bg-body-tertiary"></nav>

<!-- FIM DO CABEÇALHO -->

<!-- INICIO DO CONTEUDO -->
<?php

if(!isset($_GET['id'])) {
    $id = 'dishies';
} else {
    $id = $_GET['id'];
}
;

include "$id.php";
?>

<!-- FIM DO CONTEÚDO -->

<!-- INÍCIO DO RODAPE -->
<section class="">
    <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Quitutes da vivi
                </h6>
                <p>
                    lorem ipsul sei la oq la e oq lalalalalala.
                </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <h6 class="text-uppercase fw-bold mb-4">
                    Links Sociais
                </h6>
                <p>
                    <a href="#!" class="text-reset">Instagram</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Facebook</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Whatsapp</a>
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Contate-nos</h6>
                <p><i class="fas fa-home me-3"></i> uruguaiana, prado lima 2031, BR</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    gmail@gmail.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 55 9 9999-9999</p>
                <p><i class="fas fa-print me-3"></i> + 55 9 9999-9999</p>
            </div>
            <div class="col-xs-12 col-sm-3 payment-options color-gray">
                <h6 class="text-uppercase fw-bold mb-4">
                    Opções de pagamento
                </h6>
                <ul>
                    <li>
                        <a href="#"> <img src="img/dinheiro.png" alt="Dinheiro"> </a>
                    </li>
                    <li>
                        <a href="#"> <img src="img/pix.png" alt="Pix"> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<hr>

<div class="footer">
    <img src="img/quitutefooter.png" alt="Bootstrap" height="100%" />
    <span>© Copyright 2023 ....- <br />Todos os direitos reservados ....</span>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
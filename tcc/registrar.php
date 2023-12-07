<?php

session_start();
error_reporting(0);
include("conexão/conectar.php");
if (isset($_POST['submit'])) {
    if (
        empty($_POST['1nome']) ||
        empty($_POST['2nome']) ||
        empty($_POST['email']) ||
        empty($_POST['telefone']) ||
        empty($_POST['senha']) ||
        empty($_POST['csenha']) ||
        empty($_POST['csenha'])
    ) {
        $message = "Todos os arquivos devem estar presentes!";
    } else {

        $check_username = mysqli_query($db, "SELECT nomeusuario FROM usuarios where nomeusuario = '" . $_POST['nomeusuario'] . "' ");
        $check_email = mysqli_query($db, "SELECT email FROM usuarios where email = '" . $_POST['email'] . "' ");

        if ($_POST['senha'] != $_POST['csenha']) {

            echo "<script>alert('Senha não coecide');</script>";
        } elseif (strlen($_POST['senha']) < 6) {
            echo "<script>alert('Senha deverá ser >=6 digitos');</script>";
        } elseif (strlen($_POST['telefone']) < 10) {
            echo "<script>alert('Número de telefone inválido!');</script>";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Email inválido por favor digite um válido!');</script>";
        } elseif (mysqli_num_rows($check_username) > 0) {
            echo "<script>alert('Este nome de usuário já existe!');</script>";
        } elseif (mysqli_num_rows($check_email) > 0) {
            echo "<script>alert('Este email já existe!');</script>";
        } else {


            $mql = "INSERT INTO usuarios(nomeusuario,1nome,2nome,email,telefone,senha,endereco) VALUES('" . $_POST['nomeusuario'] . "','" . $_POST['1nome'] . "','" . $_POST['2nome'] . "','" . $_POST['email'] . "','" . $_POST['telefone'] . "','" . md5($_POST['senha']) . "','" . $_POST['endereco'] . "')";
            mysqli_query($db, $mql);

            header("refresh:0.1;url=index.php?id=login");
        }
    }

}

?>
<title>Registre-se</title>

<body>

    <div class="page-wrapper">

        <div class="container">
            <ul>
            </ul>
        </div>
        <section class="contact-page inner-page">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-body">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label for="exampleInputEmail1">Nome de usuário</label>
                                            <input class="form-control" type="text" name="nomeusuario"
                                                id="example-text-input">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Primeiro Nome</label>
                                            <input class="form-control" type="text" name="1nome"
                                                id="example-text-input">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Último nome</label>
                                            <input class="form-control" type="text" name="2nome"
                                                id="example-text-input-2">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="text" class="form-control" name="email" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Número de telefone</label>
                                            <input class="form-control" type="text" name="telefone"
                                                id="example-tel-input-3">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputPassword1">Senha</label>
                                            <input type="senha" class="form-control" name="senha"
                                                id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputPassword1">Confirmar Senha</label>
                                            <input type="senha" class="form-control" name="csenha"
                                                id="exampleInputPassword2">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="exampleTextarea">Endereço de entrega</label>
                                            <textarea class="form-control" id="exampleTextarea" name="endereco"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p> <input type="submit" value="Registrar-se" name="submit"
                                                    class="btn theme-btn"> </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
include("conexão/conectar.php");
error_reporting(0);
session_start();
?>
<?php

if(isset($_POST['login'])) {

    include_once('conexão/conectar.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE login='$usuario'";
    $resultado = mysqli_query($db, $sql);

    if(mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_assoc($resultado);
        if(password_verify($senha, $dados['senha'])) {

            session_start();
            $_SESSION["u_id"] = $dados['u_id'];
            $_SESSION["nomeusuario"] = $dados['nomeusuario'];
            $_SESSION["permissao"] = $dados['permissao'];

            if($dados['permissao'] == 1) {
                header("location:admin.php");
            } else {
                header("location:index.php");
            }

        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
</head>

<body>
</body>

</html>



<section class="vh-100" style="background-color: #8B0000;">
    <form method="post">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Login</h3>

                            <div class="form-outline mb-4">
                                <input type="text" class="form-control form-control-lg" />
                                <label class="form-label" name="usuario">Usuário</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX-2" name="senha">Senha</label>
                            </div>

                            <button class="btn btn-danger btn-lg btn-block" type="submit" name="login">Login</button>
                            <div class="cta">Não está registrado?<a href="index.php?id=registrar" style="color:#5c4ac7;">Crie uma
                                    conta</a></div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    </div>
    </div>
</section>
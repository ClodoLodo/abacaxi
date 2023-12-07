<?php
session_start();
if (isset($_SESSION['u_id']) && $_SESSION['permissao'] == 1) {
    $u_id = $_SESSION['u_id'];
    $admin = $_SESSION['usuario'];
} else {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>

<body>

    <h1> Administração </h1>

    Bem vindo
    <?php echo $admin; ?> à área administrativa do site.

</body>

</html>
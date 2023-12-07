<?php
session_start();
if (isset($_SESSION['u_id']) && $_SESSION['permissao'] == 2) {
    $u_id = $_SESSION['u_id'];
    $usuario = $_SESSION['usuario'];
} else {
    header("location:index.php");
}
?>
<?php
include_once('conexão/conectar.php');

if (isset($_POST['cadastrar'])) {
    $nome1 = $_POST['1nome'];
    $nome2 = $_POST['2nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO contatos (iddono, nome, telefone) VALUES ($idusuario,'$nome','$tel')";
    mysqli_query($conexao, $sql);
    header("location:contatos.php");
}

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];

    $sql = "UPDATE contatos SET nome='$nome', telefone='$tel' WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location:contatos.php");
}

if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];

    $sql = "DELETE FROM contatos WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location:contatos.php");
}

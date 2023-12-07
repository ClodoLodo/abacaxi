<?php
$servidor = "localhost";
$usuario = "root"; 
$senha = "";
$nomeDb = "tcc";

$db = mysqli_connect($servidor, $usuario, $senha, $nomeDb); 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

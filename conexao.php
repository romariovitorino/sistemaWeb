<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "supermercado";

$conexao = mysqli_connect(
    $servidor,
    $usuario,
    $senha,
    $dbname
);
if (!$conexao) {
    die("erro ao conectar no banco de dados"
        . mysqli_connect_error());
}
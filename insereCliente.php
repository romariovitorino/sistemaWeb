<?php
require("conexao.php");

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$insereCliente = "INSERT INTO 
cliente(nome, endereco, telefone)
VALUES ('$nome', '$endereco', '$telefone')";
$operacaoSQL = mysqli_query($conexao, $insereCliente);
if (mysqli_affected_rows($conexao) != 0) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar cliente";
}

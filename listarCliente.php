<?php
require 'conexao.php';
?>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Listagem de Clientes</title>
</head>

<body>
    <a href="index.html">Início</a>
    <a href="cadastroCliente.html">Cadastro</a>
    <h4>Clientes cadastrados</h4>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT * FROM cliente";
            $executaConsulta = mysqli_query($conexao, $consulta);
            if (mysqli_num_rows($executaConsulta) > 0) {
                foreach ($executaConsulta as $clientes) {
            ?>
                    <tr>
                        <td><?= $clientes['ID']; ?></td>
                        <td><?= $clientes['nome']; ?></td>
                        <td><?= $clientes['endereco']; ?></td>
                        <td><?= $clientes['telefone']; ?></td>
                        <td>
                            <a href="editarCliente.php?ID=<?= $clientes['ID']; ?>">Editar</a>
                            <a href="excluirCliente.php?ID=<?= $clientes['ID']; ?>">Excluir</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "Nenhum cliente cadastrado.";
            }
            ?>
        </tbody>
    </table>
</body>

</html>
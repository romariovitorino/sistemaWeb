<?php
require 'conexao.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Edição de Cliente</title>
</head>

<body>
    <h4><a href="listarCliente.php">Listagem </a> </h4>
    <?php
    if (isset($_GET['ID'])) {
        $idCliente = $_GET['ID'];
        $consulta = "SELECT * FROM cliente where ID ='$idCliente' ";
        $execultaConsulta = mysqli_query($conexao, $consulta);
        if (mysqli_num_rows($execultaConsulta) > 0) {
            $cliente = mysqli_fetch_array($execultaConsulta);
    ?>
            <form action="enviarEdicao.php" method="POST">
                <input type="hidden" name="ID" value="<?= $cliente['ID']; ?>">
                <label>Nome do Cliente</label><br>
                <input type="text" name="nome" value="<?= $cliente['nome']; ?>">
                <br>
                <label>Endereço</label><br>
                <input type="text" name="endereco" value="<?= $cliente['endereco']; ?>">
                <br>
                <label>Telefone</label><br>
                <input type="text" name="telefone" value="<?=
                                                            $cliente['telefone']; ?>">
                <br><br>
                <div>
                    <button type="submit" name="atualizar">
                        Editar Cliente
                    </button>
                </div>
            </form>
    <?php
        } else {
            echo "<h4>Cliente não encontrado</h4>";
        }
    } else {
        echo "ID não informado";
    }
    ?>
</body>

</html>
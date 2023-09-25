<?php

include_once("Connection.php");

$conn = Connection::getConnection();

$sql = "SELECT * FROM produtos";
$stm = $conn->prepare($sql);

$stm->execute();
$dados = $stm->fetchAll();
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>

    <h3> Formulário de Produtos </h3>

    <form action="./produto_inserir.php" method="get">

        <input type="text" name="descricao" id="descricao" placeholder="Descrição">
        <br><br>
        <input type="text" name="un_medida" id="un_medida" placeholder="Unidade de Medida">
        <br><br>
        <input type="submit" value="Inserir">

    </form>



    <h3> Listagem de Produtos </h3>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>Unidade de Medida</th>
            <th></th>
        </tr>

        <?php foreach($dados as $produto): ?>

            <tr>
                <td><?= $produto["id"] ?></td>
                <td><?= $produto["descricao"] ?></td>
                <td><?= $produto["un_medida"] ?></td>
                <td> 
                    <a href="produto_excluir.php?id=<?= $produto["id"] ?>"
                    onclick="return confirm('Confirmar a exclusão')">Excluir</a> 
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
</body>
</html>
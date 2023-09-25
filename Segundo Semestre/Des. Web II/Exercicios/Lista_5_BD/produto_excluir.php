<?php

include_once("./Connection.php");

$id = "";

if (trim(isset($_GET["id"]))) {
    $id = trim($_GET["id"]);
}

if (!$id) {
    echo "<h3> id não fornecido </h3>";
    echo "<a href=./produto_listar.php> voltar </a>";
    exit;
}

else {

    $conn = Connection::getConnection();

    $sql = "DELETE FROM produtos WHERE id = ?";
    $stm = $conn->prepare($sql);

    $stm->execute([$id]);

    $linhasAfetadas = $stm->rowCount();

    echo "linhas: " . $linhasAfetadas;   
    if ($linhasAfetadas > 0) {
        header("Location: ./produto_listar.php");
        exit;
    } else {
        echo "<h3> Erro ao apagar registro </h3>";
        echo "<a href= ./produto_listar.php> voltar </a>";
        exit;
    }

}
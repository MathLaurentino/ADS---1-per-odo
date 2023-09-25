<?php

include_once("Connection.php");

if ( !isset($_GET["descricao"]) || !isset($_GET["un_medida"]) ) {
    echo "Dados faltando! <br><br>"; 
    echo "<a href=./produto_listar.php> voltar </a>";
    exit;
} 
else {

    $descricao = trim($_GET["descricao"]);
    $un_medida = trim($_GET["un_medida"]);

    $conn = Connection::getConnection();

    $sql = "INSERT INTO produtos (descricao, un_medida) VALUES (?, ?)";
    $stm = $conn->prepare($sql);

    $stm->execute([$descricao, $un_medida]);

    header("Location: ./produto_listar.php");

    exit();

}
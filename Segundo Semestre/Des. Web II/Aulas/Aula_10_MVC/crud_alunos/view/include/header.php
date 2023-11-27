<?php
include_once(__DIR__ . "../../../controller/LoginController.php");

$loginController = new LoginController();
if (!$loginController->verificarUsuarioLogado()) {
    header("Location: " . URL_BASE . "/view/login/login.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CRUD Alunos</title>
</head>
<body>
    <div class="container">
        <?php include_once(__DIR__ . "/menu.php") ?>
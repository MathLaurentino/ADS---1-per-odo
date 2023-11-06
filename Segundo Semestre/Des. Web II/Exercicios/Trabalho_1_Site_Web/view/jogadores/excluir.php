<?php
include_once(__DIR__ . "/../../controller/JogadorController.php");

$idAluno = 0;
if (isset($_GET["id"])) {
    $idAluno = $_GET["id"];
}

$jogadorController = new JogadorController();
$jogador = $jogadorController->buscarPorId($idAluno);

if (!$jogador) {
    echo "Jogador não encontrado! <br>";
    echo "<a href='listar.php'> Voltar </a>";
    exit;
}

$jogadorController->excluirPorId($jogador->getId());

header("location: listar.php");
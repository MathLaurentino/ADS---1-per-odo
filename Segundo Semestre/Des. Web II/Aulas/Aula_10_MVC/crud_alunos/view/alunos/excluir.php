<?php
include_once(__DIR__ . "/../../controller/AlunoController.php");

$idAluno = 0;
if (isset($_GET["id"])) {
    $idAluno = $_GET["id"];
}

$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($idAluno);

if (!$aluno) {
    echo "Aluno não encontrado! <br>";
    echo "<a href='listar.php'> Voltar </a>";
    exit;
}

$alunoCont->excluirPorId($aluno->getId());

header("location: listar.php");
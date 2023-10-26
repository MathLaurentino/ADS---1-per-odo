<?php
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErros = "";
$aluno = null;

if (isset($_POST["submetido"])) {

    $idAluno = is_numeric($_POST["id"])? $_POST["id"] : null;
    $nome = trim($_POST["nome"]);
    $idade = is_numeric($_POST["idade"])? $_POST["idade"] : null;
    $estrangeiro = trim($_POST["estrang"]);
    $idCurso = is_numeric($_POST["curso"])? $_POST["curso"] : null;


    $aluno = new Aluno();
    $aluno->setId($idAluno)
        ->setNome($nome)
        ->setIdade($idade)
        ->setEstrangeiro($estrangeiro);

    if ($idCurso) {
        $curso = new Curso();
        $curso->setId($idCurso);
        $aluno->setCurso($curso);
    }

    $alunoCont = new AlunoController();
    $erros = $alunoCont->alterar($aluno);

    if (empty($erros)) {
        header("location: listar.php");
        exit;
    }

    $msgErros = implode("<br>", $erros);

}
else {

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

}

include_once(__DIR__ . "/form.php");
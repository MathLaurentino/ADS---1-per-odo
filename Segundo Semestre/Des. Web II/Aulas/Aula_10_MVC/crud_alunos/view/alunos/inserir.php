<?php 

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../model/Curso.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErros = "";
$aluno = null;

if (isset($_POST["submetido"])) {
    $nome = trim($_POST["nome"]);
    $idade = is_numeric($_POST["idade"])? $_POST["idade"] : null;
    $estrangeiro = trim($_POST["estrang"]);
    $idCurso = is_numeric($_POST["curso"])? $_POST["curso"] : null;

    $aluno = new Aluno();
    $aluno->setNome($nome)
        ->setIdade($idade)
        ->setEstrangeiro($estrangeiro); 

    if ($idCurso) {
        $curso = new Curso();
        $curso->setId($idCurso);
        $aluno->setCurso($curso);
    }

    $alunoCont = new AlunoController();
    $erros = $alunoCont->inserir($aluno);

    if (empty($erros)) {
        header("location: listar.php");
        exit;
    }

    $msgErros = implode("<br>", $erros);
}

include_once(__DIR__ . "/form.php");

?>

<?php
include_once(__DIR__ . "/../../controller/JogadorController.php");

$msgErros = "";
$jogador = null;

if (isset($_POST["submetido"])) {

    $id = is_numeric($_POST["id"])? $_POST["id"] : null;
    $nome = trim($_POST["nome"]);
    $idade = is_numeric($_POST["idade"])? $_POST["idade"] : null;
    $fk_time = is_numeric($_POST["time"])? $_POST["time"] : null;
    $fk_posicao = is_numeric($_POST["posicao"])? $_POST["posicao"] : null;

    $jogador = new Jogador();  
    $jogador->setId($id);
    $jogador->setIdade($idade);
    $jogador->setNome($nome);

    if ($fk_time) {
        $time = new Time();
        $time->setId($fk_time);
        $jogador->setTime($time);
    }

    if ($fk_posicao) {
        $posicao = new Posicao();
        $posicao->setId($fk_posicao);
        $jogador->setPosicao($posicao);
    }

    $jogadorController = new JogadorController();
    $erros = $jogadorController->alterar($jogador);

    if (empty($erros)) {
        header("location: listar.php");
        exit;
    }
    
    $msgErros = implode("<br>", $erros);

}
else {

    $idJogador = 0;
    if (isset($_GET["id"])) {
        $idJogador = $_GET["id"];
    }

    $jogadorController = new JogadorController();
    $jogador = $jogadorController->buscarPorId($idJogador);

    if (!$jogador) {
        echo "Jogador não encontrado! <br>";
        echo "<a href='listar.php'> Voltar </a>";
        exit;
    }

}

include_once(__DIR__ . "/form.php");
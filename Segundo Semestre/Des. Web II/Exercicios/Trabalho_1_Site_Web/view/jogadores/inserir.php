<?php
include_once(__DIR__."/../../controller/JogadorController.php");
include_once(__DIR__."/../../model/jogador.php");
include_once(__DIR__."/../../model/Time.php");
include_once(__DIR__."/../../model/Posicao.php");

$msgErros ="";
$jogador=null;

if(isset($_POST["submetido"])){

    $nome = trim($_POST["nome"]);
    $idade = is_numeric($_POST["idade"])? $_POST["idade"] : null;
    $perna_dominante = is_numeric($_POST["perna_dominante"])? $_POST["perna_dominante"] : null;
    $fk_time = is_numeric($_POST["time"])? $_POST["time"] : null;
    $fk_posicao = is_numeric($_POST["posicao"])? $_POST["posicao"] : null;
    
    $jogador = new Jogador();  
    $jogador->setIdade($idade);
    $jogador->setNome($nome);
    $jogador->setPerna_dominante($perna_dominante);

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
    $erros = $jogadorController->inserir($jogador);

    if (empty($erros)) {
        header("location: listar.php");
        exit;
    }

    $msgErros = implode("<br>", $erros);
}


include_once(__DIR__."/form.php");
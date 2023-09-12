<?php

include_once("persistencia.php");

$id = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(!$id) {
    echo "ID pessoa não informado!";
    echo "<br>";
    echo "<a href='pessoa.php'>Voltar</a>";
    exit;
}

//Carregar o array de pessoas do arquivo
$pessoas = buscarDados();

//Encontrar o índice do pessoa
$index = -1;
for($i=0; $i<count($pessoas); $i++) {
    if($id == $pessoas[$i]['id']) {
        $index = $i;
        break;
    }
}

//Verificar se o pessoa foi encontrado
if($index < 0) {
    echo "ID do pessoa não encontrado!";
    echo "<br>";
    echo "<a href='pessoas.php'>Voltar</a>";
    exit;
}

//Excluir o pessoa
array_splice($pessoas, $index, 1);
//print_r($pessoas);

//Persisitir o array sem o pessoa excluido
salvarDados($pessoas);

//Redirecionar a página
header("location: pessoa.php");

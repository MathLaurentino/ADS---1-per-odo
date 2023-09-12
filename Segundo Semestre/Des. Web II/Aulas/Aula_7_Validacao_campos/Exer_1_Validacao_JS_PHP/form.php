<?php

$nome = "";
$idade = "";
$msgError = "";

if (isset($_POST["submetido"])) {
    
    $nome = trim($_POST["nome"]);
    $idade = trim($_POST["idade"]);

    if (!$nome) 
        $msgError = "Informe o nome";
    elseif (!$idade) 
        $msgError = "Informe a idade";
    else {
        echo $nome . " - " . $idade;
        $nome = "";
        $idade = "";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario a validar</h1>

    <form method="post" onsubmit="true"> <!-- onsubmit="return validar();" -->

        <input type="text" name="nome" placeholder="nome" id="nome" value="<?= $nome ?>">

        <br><br>
        
        <input type="number" name="idade" placeholder="idade" id="idade" value="<?= $idade ?>">
        
        <br><br>

        <input type="hidden" name="submetido" value="1">

        <button type="submit">Enviar</button>

    </form>

    <div id="msg" style="color: red;"><?= $msgError ?></div>

    <script src="./validacao.js"></script>

</body>
</html>
<?php

    $value1 = 0;
    $value2 = 0;
    $operacao = "";

    if (isset($_POST["value1"]))
        $value1 = $_POST["value1"];

    if (isset($_POST["value2"]))
        $value2 = $_POST["value2"];

    if (isset($_POST["operacao"]))
        $operacao = $_POST["operacao"];

    // if (isset($value1) && )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculadora</h2>

    <form method="post" action="">
        <input type="number" name="value1" placeholder="valor 1">
        <br>
        <br>

        <input type="number" name="value2" placeholder="valor 2">
        <br>
        <br>

        <select name="operacao">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select> 
        <br>
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
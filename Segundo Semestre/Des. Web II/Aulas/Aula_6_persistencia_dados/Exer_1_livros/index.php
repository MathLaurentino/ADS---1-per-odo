<?php

    include_once("persistencia.php");

    $livros = buscarDados();

    if (isset($_POST["submetido"])){
        
        $titulo = $_POST["titulo"];
        $genero = $_POST["genero"];
        $qt_paginas = $_POST["qt_paginas"];
        $id = vsprintf("%s%s-%s-%s-%s-%s%s%s", str_split(bin2hex(random_bytes(16)), 4));

        $livro = array(
            "id" => $id,
            "titulo" => $titulo,
            "genero" => $genero,
            "qt_paginas" => $qt_paginas
        );

        array_push($livros, $livro);

        salvarDados($livros);

    }

    $livro = buscarDados();
    // echo "<pre>"; print_r($l);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
    <style>
        table,td,tr,th {
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Cadastro de livros</h2>

    <h3>Formulario de livros</h3>

    <form method="post">
        <input type="text" name="titulo" placeholder="Título">
        <br><br>

        <select name="genero" id="">
            <option value="">--Selecione um Genero--</option>
            <option value="D">Drama</option>
            <option value="F">Ficção</option>
            <option value="R">Romance</option>
            <option value="O">Outro</option>
        </select>   
        <br><br>

        <input type="number" name="qt_paginas" placeholder="Quantidade de páginas" id="">
        <br><br>

        <input type="hidden" name="submetido" value="1">

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>

    <h3>Listagem de livros</h3>

    <table>
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Páginas</th>
        </tr>

        <?php foreach($livro as $l): ?>

            <tr>
                <td><?= $l["titulo"] ?></td>
                <td><?= $l["genero"] ?></td>
                <td><?= $l["qt_paginas"] ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
    
</body>
</html>
<?php

    $nome = $_POST["nome"];
    $marca = $_POST["marca"];
    $combustivel = $_POST["combustivel"];

    echo "nome: " . $nome . "<br>";
    echo "marca: " . $marca . "<br>";
    echo "Combustivel: ";
    if ($combustivel == "G")
        echo "Gasolina";
    elseif ($combustivel == "D")
        echo "Diesel";
    elseif ($combustivel == "A")
        echo "Alcool";
    elseif ($combustivel == "F")
        echo "Flex";
    else 
        echo "Indefinido";

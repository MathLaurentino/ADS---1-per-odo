<?php

    $var = array( 0 => array("nome" => "João",
                             "idade" => 25),
                1 => array("nome" => "Maria",
                           "idade" => 48) ); //Definição

    echo $var[0]["nome"]; //Imprime João
    echo $var[1]["idade"]; //Imprime 48

    //Percorrer o array com FOREACH
    foreach ($var as $dado) {
        echo "Nome = " . $dado['nome'];
        echo " | Idade = " . $dado['idade'];
        echo "<br>";
    }
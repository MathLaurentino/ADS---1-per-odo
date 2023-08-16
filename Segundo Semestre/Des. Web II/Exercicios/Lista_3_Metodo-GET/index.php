<?php

    $parametrosFaltando = [];
    if (!isset($_GET["inicio"])){
        $parametrosFaltando[] = "inicio";
    }
    if (!isset($_GET["razao"])){
        $parametrosFaltando[] = "razao";
    }
    if (!isset($_GET["quantidade"])){
        $parametrosFaltando[] = "quantidade";
    }

    if (count($parametrosFaltando) > 0) 
    {
        echo "Parâmetros faltando: " . implode(', ', $parametrosFaltando);
    } 
    else 
    {
        $inicio = intval($_GET["inicio"]);
        $razao = intval($_GET["razao"]);
        $quantidade = intval($_GET["quantidade"]);

        $result = $inicio;

        echo "Progressão Aritmética: - ";
        for ($i=0; $i<$quantidade; $i++) {
            echo $inicio + ($i * $razao) . " - ";
        }
    }
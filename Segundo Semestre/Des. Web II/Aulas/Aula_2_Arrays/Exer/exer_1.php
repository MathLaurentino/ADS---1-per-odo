<?php

    $alunos = array("Matheus", "Felipe", "Joao", "Amanda", "Maria");
    $carros = array("Creta", "Toro", "Renegate", "Gol", "Ford");
    $times = array("Flamengo", "Palmeiras", "São Paulo", "Corinthians", "Grêmio");
    $escolas = array("Escola A", "Escola B", "Escola C", "Escola D", "Escola E");
    $cidades = array("São Paulo", "Rio de Janeiro", "Belo Horizonte", "Porto Alegre", "Curitiba");


    echo "<table border=1>";

        echo "<tr>";
            foreach($alunos as $name) {
                echo "<td>" . $name . "</td>";
            }
        echo "</tr>";


        echo "<tr>";
        foreach($carros as $name) {
            echo "<td>" . $name . "</td>";
        }
        echo "</tr>";


        echo "<tr>";
        foreach($times as $name) {
            echo "<td>" . $name . "</td>";
        }
        echo "</tr>";


        echo "<tr>";
        foreach($escolas as $name) {
            echo "<td>" . $name . "</td>";
        }
        echo "</tr>";


        echo "<tr>";
        foreach($cidades as $name) {
            echo "<td>" . $name . "</td>";
        }
        echo "</tr>";
    
    echo "</table>";
    
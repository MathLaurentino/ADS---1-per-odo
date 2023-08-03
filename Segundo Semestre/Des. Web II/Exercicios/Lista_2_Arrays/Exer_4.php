<?php

    echo "Escreva um programa que declare um array associativo em PHP para carros contemplando os
    campos: modelo, marca e link para uma foto. Devem ser criados 5 carros. Após isso, utilize laços
    para criar um card (utilizando uma DIV) para cada carro, conforme o exemplo abaixo:";


    $carro1 = array("modelo" => "polo",
                    "marca" => "Volkswagen",
                    "imagem" => "foto");

    $carro2 = array("modelo" => "Onix",
                    "marca" => "Chevrolet",
                    "imagem" => "foto");
    
    $carro3 = array("modelo" => "Toro",
                    "marca" => "Fiat",
                    "imagem" => "foto");
    
    $carro4 = array("modelo" => "Creta",
                    "marca" => "Hyundai",
                    "imagem" => "foto");
    
    $carro5 = array("modelo" => "Audi Q5",
                    "marca" => "Audi",
                    "imagem" => "foto");


    $carros = array($carro1, $carro2, $carro3, $carro4, $carro5);

    echo "<pre>"; print_r($carros); echo "</pre>";     



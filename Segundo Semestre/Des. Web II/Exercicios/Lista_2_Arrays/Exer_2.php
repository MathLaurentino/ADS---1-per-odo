<?php

    echo "Faça um programa em PHP que declare dois arrays: <br>";
    echo "- O primeiro deve possuir 5 elementos representando palavras; <br>";
    echo "- O segundo deve ser vazio; <br>";
    echo "Após isso, percorra o primeiro array e adicione cada um dos seus elementos no array que foi
    declarado vazio. Por fim, percorra o segundo array e imprima os seus elementos separados por
    virgula: <br><br>";

    $array1 = [12, 34, 56, 78, 90];
    $array2 = [];

    foreach ($array1 as $num) {
       array_push($array2, $num);
    }

    echo "Array 2: <br>";
    foreach ($array2 as $num) {
        echo  $num . "<br>";
    }
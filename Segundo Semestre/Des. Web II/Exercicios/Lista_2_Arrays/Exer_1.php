<?php

    echo "Elabore um programa em PHP que declare um array com 10 números a sua escolha. Após isso,
    forneça como saída a média aritmética dos números desse array: <br><br>";

    $nums = [12, 34, 56, 78, 90, 23, 45, 67, 89, 10];

    $total = 0;
    $quantidade = count($nums);
    
    foreach ($nums as $num) {
        $total += $num;
    }
    
    $media = $total / $quantidade;
    
    echo "Array: " . implode(", ", $nums) . "<br>";
    echo "Média Aritmética: " . $media;
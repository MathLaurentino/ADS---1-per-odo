<?php

    define("PI", 3.14);

    function areaCirculo (float $raio): float {
        return PI * $raio * $raio;
    }

    function circunferencia(float $raio){
        return 2 * PI * $raio;
    }

    echo "RAIO 5: <br>";
    echo "areaCirculo  ". areaCirculo(5) . "<br>";
    echo "circunferencia ". circunferencia(5) . "<br>";


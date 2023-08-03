<?php

    $anoInicial = 1980;
    $anoFinal = 2023;

    for ($ano = $anoInicial; $ano <= $anoFinal; $ano++) {

        // if (($ano % 4) === 0 && ($ano % 100) !== 0 ) {
        //     echo $ano . "<br>";
        // } 
        // else if (($ano % 4) === 0 && ($ano % 400) === 0 ) {
        //     echo $ano . "<br>";
        // }

        if (($ano % 4 === 0) && ($ano % 100 !== 0  || $ano % 400 === 0)) {
            echo $ano . "<br>";
        }
    }
<?php 

    for ($x=0; $x <= 50; $x++) {
        $resto = $x % 3;
        if ($resto === 0) {
            echo $x . "<br>";
        }
    }
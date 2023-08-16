<?php

    function fatorial (int $num): int {
        $result = 1; 
        for ($x=$num; $x>1; $x--) {
            $result *= $x;
        }
        return $result;
    }

    
    echo "5! ". fatorial(5) . "<br>";
    echo "12! ". fatorial(12) . "<br>";
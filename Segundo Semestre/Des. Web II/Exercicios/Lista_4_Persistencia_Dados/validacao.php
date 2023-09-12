<?php

    function validation($nome, $sobrenome, $idade, $sexo): array {

        $erros = array();

        if (!trim($nome)){
            array_push($erros, "Informe o nome");
        }
        if (!trim($sobrenome)){
            array_push($erros, "Informe o sobrenome");
        }
        if (!$idade){
            array_push($erros, "Informe o idade");
        } elseif ($idade < 0) {
            array_push($erros, "Idade tem que ser igual ou maior que zero");
        }
        if (!trim($sexo)){
            array_push($erros, "Informe o sexo");
        }

        return $erros;
    }

?>
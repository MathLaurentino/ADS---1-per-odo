<?php

    $array0 = [];
    $array1 = ["Orquídea", "Margarida", "Petúnia"];
    $array2 = ["Laranja", "Maçã", "Limão"];
    $array3 = ["Foz do Iguaçu", "Cascavel", "Toledo"];
    $array4 = ["Itaipu", "Cataratas", "Parque das Aves"];

    array_push($array0, $array1);
    array_push($array0, $array2);
    array_push($array0, $array3);
    array_push($array0, $array4);

    echo "<pre>"; print_r($array0); echo "</pre>";     

?>

<table border=1>
    <?php for ($i = 0; $i < 3; $i++) { ?>
        <tr>
            <?php 
                foreach($array0 as $chave) {
                    echo "<td>" . $chave[$i] . "</td>";
                }
            ?>
        </tr>
    <?php } ?>
</table>
<?php

    $var = array("Nome" => array("Manuel de Medeiros", 
                                  "Juliana de Amaral",
                                  "Rodrigo Baidek",
                                  "Fabíola da Silva"),
                 "Endereço" => array("Rua das Acácias",
                                     "Rua dos Pinheiros",
                                     "Rua Dom Pedro I",
                                     "Rua Chile"),
                 "Cidade" => array("Foz do Iguaçu",
                                   "Florianópolis",
                                   "Petrópolis",
                                   "Guarulhos"),
                 "UF" => array("PR","SC","RJ","SP"));

echo "<pre>"; print_r($var); echo "</pre>";     
?>

<table border="1">

    <tr>
        <?php 
            foreach (array_keys($var) as $column_name) {
                echo "<th>" . $column_name . "</th>";
            }
        ?>
    </tr>

    <?php for ($i = 0; $i < 4; $i++) { ?>

        <tr>
            <?php 
                foreach ($var as $column) {
                    echo "<td>" . $column[$i] . "</td>";
                } 
            ?>
        </tr>

    <?php } ?>
</table>   
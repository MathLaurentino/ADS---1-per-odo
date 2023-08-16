<?php

    echo "Escreva um programa que declare um array associativo em PHP para carros contemplando os
    campos: modelo, marca e link para uma ./imgs/creta.jpg. Devem ser criados 5 carros. Após isso, utilize laços
    para criar um card (utilizando uma DIV) para cada carro, conforme o exemplo abaixo: <br> <br> <br>";


    $carro1 = array("modelo" => "polo",
                    "marca" => "Volkswagen",
                    "imagem" => "polo.jpg");

    $carro2 = array("modelo" => "Onix",
                    "marca" => "Chevrolet",
                    "imagem" => "onix.jpg");
    
    $carro3 = array("modelo" => "Toro",
                    "marca" => "Fiat",
                    "imagem" => "toro.jpg");
    
    $carro4 = array("modelo" => "Creta",
                    "marca" => "Hyundai",
                    "imagem" => "creta.jpg");
    
    $carro5 = array("modelo" => "Audi Q5",
                    "marca" => "Audi",
                    "imagem" => "audi.jpg");


    $carros = array($carro1, $carro2, $carro3, $carro4, $carro5);

    // echo "<pre>"; print_r($carros); echo "</pre>";
?>


<?php foreach ($carros as $carro) { ?>

        <br>

        <div style="width: 200px; border: 1px solid; margin-top: 20px;">
            <?= $carro["modelo"] ?> <br>
            <?= $carro["marca"] ?> <br>
            <img src="./imgs/<?= $carro["imagem"] ?>" style="width: 100%;"> <br>
        </div>

        <br>
<?php } ?>

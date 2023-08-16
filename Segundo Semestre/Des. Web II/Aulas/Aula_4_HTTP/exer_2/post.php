<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

$soma = $num1 + $num2 + $num3;

$media = $soma /3;

echo "Media Aritimetica: " . $media;
<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

$soma = $num1 + $num2 + $num3;

$media = $soma /3;

echo "Media Aritimetica: " . $media;
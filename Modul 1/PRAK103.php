<?php

$celcius = 37.841;

$fahrenheit = (9/5) * $celcius + 32;
$reamur = (4/5) * $celcius;
$kelvin = $celcius + 273.15;

$Fahrenheit = number_format($fahrenheit, 4, ',', '');
$Reamur = number_format($reamur, 4, ',', '');
$Kelvin = number_format($kelvin, 4, ',', '');

echo "Fahrenheit (F) = $Fahrenheit\n";
echo "Reamur (R) = $Reamur\n";
echo "Kelvin (K) = $Kelvin\n";

?>
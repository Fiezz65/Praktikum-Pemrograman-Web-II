<?php

$tinggi    = 5.4;
$lebar     = 14.7;
$sisi      = 7.9;

$luasAlas = 0.5 * $lebar * $sisi;
$volume   = $luasAlas * $tinggi;

echo number_format($volume, 3, '.', '') . " m3\n";

?>
<?php

//$A = (double) readline();
//$B = (double) readline();
//$C = (double) readline();

$linha = readline();
$linhaDados = explode(' ', $linha);
$A = (float) $linhaDados[0];
$B = (float) $linhaDados[1];
$C = (float) $linhaDados[2];

$pi = 3.14159;

$areaTR = ($A * $C) / 2;
$areaCirculo = $pi * ($C * $C);
$areaTrapezio = (($A + $B) * $C) / 2;
$areaQuadrado = ($B * $B);
$areaRetangulo = $A * $B;

echo "TRIANGULO: " . number_format(round((double) $areaTR, 3), 3, '.', '') . PHP_EOL;
echo "CIRCULO: " . number_format(round((double) $areaCirculo, 3), 3, '.', '') . PHP_EOL;
echo "TRAPEZIO: " . number_format(round((double) $areaTrapezio, 3), 3, '.', '') . PHP_EOL;
echo "QUADRADO: " . number_format(round((double) $areaQuadrado, 3), 3, '.', '') . PHP_EOL;
echo "RETANGULO: " . number_format(round((double) $areaRetangulo, 3), 3, '.', '') . PHP_EOL;


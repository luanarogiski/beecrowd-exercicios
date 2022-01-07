<?php

$linha1 = readline();
$linha2 = readline();
$linha1Valores = explode(' ', $linha1);
$linha2Valores = explode(' ', $linha2);
$x1 = (double) $linha1Valores[0];
$y1 = (double) $linha1Valores[1];
$x2 = (double) $linha2Valores[0];
$y2 = (double) $linha2Valores[1];

$distancia = sqrt(pow($x2-$x1, 2) + (pow($y2-$y1, 2)));

echo number_format(round((double)$distancia, 4), 4, '.', '') . PHP_EOL;




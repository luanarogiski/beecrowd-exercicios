<?php

$x = readline();
$y = (double) readline();

$consumo = ($x / $y);

echo number_format(round((double)$consumo, 3), 3, '.', '') . " km/l" . PHP_EOL;


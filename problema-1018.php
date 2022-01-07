<?php

$valor = (int) readline();
$cedulas = [100, 50, 20, 10, 5, 2, 1];
$notas = [];

echo $valor . PHP_EOL;

foreach ($cedulas as $cedula) {
    $notas[$cedula] = (int) ($valor / $cedula);
    $valor = $valor - ($notas[$cedula] * $cedula);

    echo $notas[$cedula] . ' nota (s) ' . 'de R$ ' . $cedula . ',00' . PHP_EOL;

}


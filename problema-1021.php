<?php

$valor = (float) readline();
$notas = [100, 50, 20, 10, 5, 2];
$moedas = [1, 0.50, 0.25, 0.10, 0.05, 0.01];
$numNotas = [];
$numMoedas = [];

echo 'NOTAS:' . PHP_EOL;
foreach ($notas as $nota){
    $numNotas[$nota] = (int) ($valor / $nota);
    $valor = $valor - ($numNotas[$nota] * $nota);

    echo $numNotas[$nota] . ' nota(s) de R$ ' . number_format($nota, 2, '.', '') . PHP_EOL;
}

echo 'MOEDAS:' . PHP_EOL;
foreach ($moedas as $moeda) {
    $numMoedas[$moeda] = (int) ($valor / $moeda);
    $valor = round($valor - ($numMoedas[$moeda] * $moeda), 2);

    echo $numMoedas[$moeda] . ' moeda(s) de R$ ' . number_format($moeda, 2, '.', '') . PHP_EOL;
}
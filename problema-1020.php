<?php

$valor = (int) readline();
$anoMes = [365 => 'ano(s)', 30 => 'mes(es)', 1 => 'dia(s)'];
$idadeDias = [];

foreach (array_keys($anoMes) as $dias){
    $idadeDias[$dias] = (int) ($valor / $dias);
    $valor = $valor - ($idadeDias[$dias] * $dias);

    echo $idadeDias[$dias] . ' ' . $anoMes[$dias] . "\n";
}

  // Exemplo 2

/*$anos = (int)$valor / 365;
$meses = (int)($valor % 365) / 30;
$dias = (int)($valor % 365) % 30;

echo (int)$anos . ' ano(s)' . PHP_EOL;
echo (int)$meses . ' mes(es)' . PHP_EOL;
echo (int)$dias . ' dia(s)' . PHP_EOL;*/

            // Exemplo 3

$valor = (int) readline();
$anoMes = [365 => 'ano(s)', 30 => 'mes(es)', 1 => 'dia(s)'];
$idadeDias = [];

foreach ($anoMes as $dias => $nome){
    $idadeDias[$dias] = (int) ($valor / $dias);
    $valor = $valor - ($idadeDias[$dias] * $dias);

    echo $idadeDias[$dias] . " $nome " . "\n";


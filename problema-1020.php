<?php
/* Beecrowd - Questão-1020

Leia um valor inteiro correspondente à idade de uma pessoa em dias e informe-a em anos, meses e dias

Obs.: apenas para facilitar o cálculo, considere todo ano com 365 dias e todo mês com 30 dias. Nos casos de teste nunca haverá uma situação que permite 12 meses e alguns dias, como 360, 363 ou 364. Este é apenas um exercício com objetivo de testar raciocínio matemático simples.

Entrada
O arquivo de entrada contém um valor inteiro.

Saída
Imprima a saída conforme exemplo fornecido.

Exemplo de Entrada	 Exemplo de Saída
400                  1 ano(s)
                     1 mes(es)
                     5 dia(s)
--------------------------------------
800                  2 ano(s)
                     2 mes(es)
                     10 dia(s)
--------------------------------------
30                   0 ano(s)
                     1 mes(es)
                     0 dia(s)
--------------------------------------
*/


// Exemplo 1

/*$valor = (int) readline();
$anoMes = [365 => 'ano(s)', 30 => 'mes(es)', 1 => 'dia(s)'];
$idadeDias = [];

foreach (array_keys($anoMes) as $dias){
    $idadeDias[$dias] = (int) ($valor / $dias);
    $valor = $valor - ($idadeDias[$dias] * $dias);

    echo $idadeDias[$dias] . ' ' . $anoMes[$dias] . "\n";
}*/

// Exemplo 2

/*$anos = (int)$valor / 365;
$meses = (int)($valor % 365) / 30;
$dias = (int)($valor % 365) % 30;

echo (int)$anos . ' ano(s)' . PHP_EOL;
echo (int)$meses . ' mes(es)' . PHP_EOL;
echo (int)$dias . ' dia(s)' . PHP_EOL;*/

// Exemplo 3

$valor = (int)readline();
$anoMes = [365 => 'ano(s)', 30 => 'mes(es)', 1 => 'dia(s)'];
$idadeDias = [];

foreach (array_keys($anoMes) as $dias) {
    $idadeDias[$dias] = (int)($valor / $dias);
    $valor = $valor - ($idadeDias[$dias] * $dias);

    echo $idadeDias[$dias] . ' ' . $anoMes[$dias] . "\n";
}
?>


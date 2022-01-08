<?php
/* Beecrowd - Questão-1036

Leia 3 valores de ponto flutuante e efetue o cálculo das raízes da equação de Bhaskara. Se não for possível calcular as raízes, mostre a mensagem correspondente “Impossivel calcular”, caso haja uma divisão por 0 ou raiz de numero negativo.

Entrada
Leia três valores de ponto flutuante (double) A, B e C.

Saída
Se não houver possibilidade de calcular as raízes, apresente a mensagem "Impossivel calcular". Caso contrário, imprima o resultado das raízes com 5 dígitos após o ponto, com uma mensagem correspondente conforme exemplo abaixo. Imprima sempre o final de linha após cada mensagem.

Exemplos de Entrada	  Exemplos de Saída
10.0 20.1 5.1         R1 = -0.29788
                      R2 = -1.71212
------------------------------------------
0.0 20.0 5.0          Impossivel calcular
------------------------------------------
10.3 203.0 5.0        R1 = -0.02466
                      R2 = -19.68408
------------------------------------------
10.0 3.0 5.0          Impossivel calcular
------------------------------------------
*/

$linha = readline();
$linhaValores = explode(' ', $linha);
$a = (double) $linhaValores[0];
$b = (double) $linhaValores[1];
$c = (double) $linhaValores[2];

//$bhaskara = (sqrt($b * $b - 4 * $a * $c));
//if ($bhaskara == 0 && $bhaskara < 0) {

if (($a == 0) | (($b * $b) - 4 * $a * $c < 0)){
    echo "Impossivel calcular\n";
    return;
}
$x = sqrt(($b * $b) - 4 * $a * $c);
$r1 = (- $b + $x) / (2 * $a);
$r2 = (- $b - $x) / (2 * $a);

//$x = (- $b + (sqrt($b * $b) - 4 * $a * $c) / 2 * $a);
//$x2 = (- $b - (sqrt($b * $b) - 4 * $a * $c) / 2 * $a);

echo 'R1 = ' . number_format($r1, 5, '.', '') . PHP_EOL;
echo 'R2 = ' . number_format($r2, 5, '.', '') . PHP_EOL;
?>


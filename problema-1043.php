<?php
/* Beecrowd - Questão-1043

Leia 3 valores reais (A, B e C) e verifique se eles formam ou não um triângulo. Em caso positivo, calcule o perímetro do triângulo e apresente a mensagem:

Perimetro = XX.X

Em caso negativo, calcule a área do trapézio que tem A e B como base e C como altura, mostrando a mensagem

Area = XX.X

Entrada
A entrada contém três valores reais.

Saída
O resultado deve ser apresentado com uma casa decimal.


Exemplo de Entrada	        Exemplo de Saída
6.0 4.0 2.0                 Area = 10.0
---------------------------------------------
6.0 4.0 2.1                 Perimetro = 12.1
---------------------------------------------
*/

$linha = readline();
$linhaValores = explode(' ', $linha);
$a = (double) $linhaValores[0];
$b = (double) $linhaValores[1];
$c = (double) $linhaValores[2];
$p = $a + $b + $c;

if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {
    echo 'Perimetro = ' . number_format(($a + $b + $c), 1, '.', '') . PHP_EOL;
} else {
    echo 'Area = ' . number_format ((($a + $b) * $c)/2, 1, '.', '') . PHP_EOL;
}
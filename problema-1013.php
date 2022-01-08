<?php
/* Beecrowd - Questão-1013

Faça um programa que leia três valores e apresente o maior dos três valores lidos seguido da mensagem “eh o maior”. Utilize a fórmula:

Obs.: a fórmula apenas calcula o maior entre os dois primeiros (a e b). Um segundo passo, portanto é necessário para chegar no resultado esperado.

Entrada
O arquivo de entrada contém três valores inteiros.

Saída
Imprima o maior dos três valores seguido por um espaço e a mensagem "eh o maior".

Exemplos de Entrada	 Exemplos de Saída
7 14 106             106 eh o maior
---------------------------------------
217 14 6             217 eh o maior
---------------------------------------
*/

$linha = readline();
$valores = explode(' ', $linha);
$a = $valores[0];
$b = $valores[1];
$c = $valores[2];

$r = ($a + $b + abs($a - $b)) / 2;
$result = ($r + $c + abs($r - $c)) / 2;

echo $result . " eh o maior\n";
?>
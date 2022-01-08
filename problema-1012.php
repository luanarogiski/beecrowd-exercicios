<?php
/* Beecrowd - Questão-1012

Escreva um programa que leia três valores com ponto flutuante de dupla precisão: A, B e C. Em seguida, calcule e mostre:
a) a área do triângulo retângulo que tem A por base e C por altura.
b) a área do círculo de raio C. (pi = 3.14159)
c) a área do trapézio que tem A e B por bases e C por altura.
d) a área do quadrado que tem lado B.
e) a área do retângulo que tem lados A e B.
Entrada
O arquivo de entrada contém três valores com um dígito após o ponto decimal.

Saída
O arquivo de saída deverá conter 5 linhas de dados. Cada linha corresponde a uma das áreas descritas acima, sempre com mensagem correspondente e um espaço entre os dois pontos e o valor. O valor calculado deve ser apresentado com 3 dígitos após o ponto decimal.

Exemplos de Entrada	   Exemplos de Saída
3.0 4.0 5.2            TRIANGULO: 7.800
                       CIRCULO: 84.949
                       TRAPEZIO: 18.200
                       QUADRADO: 16.000
                       RETANGULO: 12.000
------------------------------------------
12.7 10.4 15.2         TRIANGULO: 96.520
                       CIRCULO: 725.833
                       TRAPEZIO: 175.560
                       QUADRADO: 108.160
                       RETANGULO: 132.080
-------------------------------------------
*/

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
?>


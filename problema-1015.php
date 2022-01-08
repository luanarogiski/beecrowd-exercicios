<?php
/* Beecrowd - Questão-1015

Leia os quatro valores correspondentes aos eixos x e y de dois pontos quaisquer no plano, p1(x1,y1) e p2(x2,y2) e calcule a distância entre eles, mostrando 4 casas decimais após a vírgula, segundo a fórmula:

Distancia = // é uma fórmula de raiz quadrada de (x2-x1) elevado 2 + (y2-y1) elevado 2.

Entrada
O arquivo de entrada contém duas linhas de dados. A primeira linha contém dois valores de ponto flutuante: x1 y1 e a segunda linha contém dois valores de ponto flutuante x2 y2.

Saída
Calcule e imprima o valor da distância segundo a fórmula fornecida, com 4 casas após o ponto decimal.

Exemplo de Entrada	 Exemplo de Saída
1.0 7.0              4.4721
5.0 9.0
---------------------------------------
-2.5 0.4             16.1484
12.1 7.3
---------------------------------------
2.5 -0.4             16.4575
-12.2 7.0
---------------------------------------
*/

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
?>




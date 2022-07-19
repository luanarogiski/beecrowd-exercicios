<?php
/* Beecrowd - Questão-1041

Leia 2 valores com uma casa decimal (x e y), que devem representar as coordenadas de um ponto em um plano. A seguir,
determine qual o quadrante ao qual pertence o ponto, ou se está sobre um dos eixos cartesianos ou na origem (x = y = 0).

                                       |y
                                   Q2  |  Q1
                                       |     x
                                ---------------
                                       |
                                   Q3  |  Q4
                                       |
Se o ponto estiver na origem, escreva a mensagem “Origem”.

Se o ponto estiver sobre um dos eixos escreva “Eixo X” ou “Eixo Y”, conforme for a situação.

Entrada
A entrada contem as coordenadas de um ponto.

Saída
A saída deve apresentar o quadrante em que o ponto se encontra.


Exemplo de Entrada	        Exemplo de Saída
4.5 -2.2                    Q4
---------------------------------------------
0.1 0.1                     Q1
---------------------------------------------
0.0 0.0                     Origem
---------------------------------------------

*/

$linha = readline();
$linhaValores = explode(' ', $linha);
$x = $linhaValores[0];
$y = $linhaValores[1];

if ($y == 0 && $x != $y) {
    echo "Eixo X\n";
} elseif ($x == 0 && $y != $x) {
    echo "Eixo Y\n";
} elseif ($x > 0 && $y > 0) {
    echo "Q1\n";
} elseif ($x < 0 && $y > 0) {
    echo "Q2\n";
} elseif ($x < 0 && $y < 0) {
    echo "Q3\n";
} elseif ($x > 0 && $y < 0) {
    echo "Q4\n";
} else {
    echo "Origem\n";
}

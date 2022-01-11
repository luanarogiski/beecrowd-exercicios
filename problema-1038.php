<?php
/* Beecrowd - Questão-1038

Com base na tabela abaixo, escreva um programa que leia o código de um item e a quantidade deste item. A seguir, calcule e mostre o valor da conta a pagar.

Entrada
O arquivo de entrada contém dois valores inteiros correspondentes ao código e à quantidade de um item conforme tabela acima.

Saída
O arquivo de saída deve conter a mensagem "Total: R$ " seguido pelo valor a ser pago, com 2 casas após o ponto decimal.

Exemplo de Entrada	 Exemplo de Saída
3 2                  Total: R$ 10.00
--------------------------------------
4 3                  Total: R$ 6.00
--------------------------------------
2 3                  Total: R$ 13.50
--------------------------------------
*/

        // Exemplo 1
$linha = readline();
$linhaValores = explode(' ', $linha);
$codigo = $linhaValores[0];
$quantidade = $linhaValores[1];
$codigoPreco = [1 => 4.00, 2 => 4.50, 3 => 5.00, 4 => 2.00, 5 => 1.50];

echo 'Total: R$ ' . number_format(($codigoPreco[$codigo]) * ($quantidade), 2, '.', '') . PHP_EOL;



        // Exemplo 2
/*$linha = readline();
$linhaValores = explode(' ', $linha);
$codigo = $linhaValores[0];
$quantidade = $linhaValores[1];


if ($codigo == 1) {
    $result = 4.00 * $quantidade;
} elseif ($codigo == 2) {
    $result = 4.50 * $quantidade;
} elseif ($codigo == 3) {
    $result = 5.00 * $quantidade;
} elseif ($codigo == 4) {
    $result = 2.00 * $quantidade;
} elseif ($codigo == 5) {
    $result = 1.50 * $quantidade;
}
echo 'Total: R$ ' . number_format($result, 2, '.', '') . PHP_EOL;
*/





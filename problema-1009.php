<?php
/* Beecrowd - Questão-1009

Faça um programa que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o total a receber no final do mês, com duas casas decimais.

Entrada
O arquivo de entrada contém um texto (primeiro nome do vendedor) e 2 valores de dupla precisão (double) com duas casas decimais, representando o salário fixo do vendedor e montante total das vendas efetuadas por este vendedor, respectivamente.

Saída
Imprima o total que o funcionário deverá receber, conforme exemplo fornecido.

Exemplos de Entrada	  Exemplos de Saída
JOAO                  TOTAL = R$ 684.54
500.00
1230.30
----------------------------------------
PEDRO                 TOTAL = R$ 700.00
700.00
0.00
----------------------------------------
MANGOJATA             TOTAL = R$ 1884.58
1700.00
1230.50
-----------------------------------------
*/

$nome = readline();
$salarioFixo = (double)readline();
$totalVendas = (double)readline();

$totalRecebimento = $salarioFixo + ($totalVendas * (15 / 100));

echo "TOTAL = R$ " . number_format(round((double)$totalRecebimento, 2), 2, '.', '') . PHP_EOL;
?>
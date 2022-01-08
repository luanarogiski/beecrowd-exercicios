<?php
/* Beecrowd - Questão-1035

Leia 4 valores inteiros A, B, C e D. A seguir, se B for maior do que C e se D for maior do que A, e a soma de C com D for maior que a soma de A e B e se C e D, ambos, forem positivos e se a variável A for par escrever a mensagem "Valores aceitos", senão escrever "Valores nao aceitos".

Entrada
Quatro números inteiros A, B, C e D.

Saída
Mostre a respectiva mensagem após a validação dos valores.

Exemplo de Entrada	 Exemplo de Saída
5 6 7 8              Valores nao aceitos
-------------------------------------------
2 3 2 6              Valores aceitos
-------------------------------------------
*/

$linha = readline();
$linhaValores = explode(' ', $linha);
$a = (int)$linhaValores[0];
$b = (int)$linhaValores[1];
$c = (int)$linhaValores[2];
$d = (int)$linhaValores[3];

if (($b > $c) && ($d > $a) && ($c + $d) > ($a + $b) && ($c > 0) && ($d > 0) && ($a % 2 == 00)) {
    echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}
?>

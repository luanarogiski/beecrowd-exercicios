<?php
/* Beecrowd - Questão-1042

Leia 3 valores inteiros e ordene-os em ordem crescente. No final, mostre os valores em ordem crescente, uma linha em branco e em seguida, os valores na sequência como foram lidos.

Entrada
A entrada contem três números inteiros.

Saída
Imprima a saída conforme foi especificado.


Exemplo de Entrada	        Exemplo de Saída
7 21 -14                     -14
                              7
                              21

                              7
                              21
                             -14
-------------------------------------------------
-14 21 7                     -14
                              7
                              21

                             -14
                              21
                              7
--------------------------------------------------
*/

    $linha = readline();
    $linhaValores = explode(' ', $linha);

    sort($linhaValores);

    echo implode("\n", $linhaValores) . "\n\n";

    $linhaValores = explode(' ', $linha);

    echo implode("\n", $linhaValores) . PHP_EOL;

    // Abaixo exemplo 2

/*
    $linha = readline();
    $linhaValores = explode(' ', $linha);

    # Usando a função sort()
        sort($linhaValores);
        foreach ($linhaValores as $valor) {
            echo $valor . "\n";
        }
        $linhaValores = explode(' ', $linha);
        echo "\n" . implode("\n", $linhaValores) . PHP_EOL;
*/



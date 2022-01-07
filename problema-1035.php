<?php

$linha = readline();
$linhaValores = explode(' ', $linha);
$a = (int)$linhaValores[0];
$b = (int)$linhaValores[1];
$c = (int)$linhaValores[2];
$d = (int)$linhaValores[3];

    if (($b > $c) && ($d > $a) && ($c + $d) > ($a + $b) && ($c > 0) && ($d > 0) && ($a % 2 == 00)){
        echo "Valores aceitos" . PHP_EOL;
    } else {
        echo "Valores nao aceitos" . PHP_EOL;
    }

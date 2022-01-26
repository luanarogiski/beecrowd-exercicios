<?php

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

<?php

$linha = readline();
$linhaValores = explode(' ', $linha);
$a = (double) $linhaValores[0];
$b = (double) $linhaValores[1];
$c = (double) $linhaValores[2];

//$bhaskara = (sqrt($b * $b - 4 * $a * $c));
//if ($bhaskara == 0 && $bhaskara < 0) {

if (($a == 0) | (($b * $b) - 4 * $a * $c < 0)){
    echo "Impossivel calcular\n";
    return;
}
$x = sqrt(($b * $b) - 4 * $a * $c);
$r1 = (- $b + $x) / (2 * $a);
$r2 = (- $b - $x) / (2 * $a);

//$x = (- $b + (sqrt($b * $b) - 4 * $a * $c) / 2 * $a);
//$x2 = (- $b - (sqrt($b * $b) - 4 * $a * $c) / 2 * $a);

echo 'R1 = ' . number_format($r1, 5, '.', '') . PHP_EOL;
echo 'R2 = ' . number_format($r2, 5, '.', '') . PHP_EOL;



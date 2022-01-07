<?php

$linha = readline();
$valores = explode (' ', $linha);
$a = $valores[0];
$b = $valores[1];
$c = $valores[2];

var_dump($linha);


$result = ($a+$b+abs($a-$b))/2;
$result = ($result+$c+abs($result-$c))/2;
echo $result . " eh o maior\n";

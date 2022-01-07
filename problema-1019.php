<?php

$tempoDuracao = (int) readline();
$horas = floor ($tempoDuracao / 3600);
$minutos = floor (($tempoDuracao - ($horas * 3600)) / 60);
$segundos = floor ($tempoDuracao % 60);

echo $horas . ":" . $minutos . ":" . $segundos . PHP_EOL;



//echo gmdate("H:i:s", $tempoDuracao);



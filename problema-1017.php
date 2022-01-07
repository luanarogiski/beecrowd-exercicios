<?php

$tempoGasto = (int) readline();
$velocidadeMedia = (int) readline();

$litrosNecessarios = ($tempoGasto * $velocidadeMedia)/12;

echo number_format($litrosNecessarios, 3, '.', '');
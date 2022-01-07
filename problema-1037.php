<?php

// ( -> está chave representa 'maior que'
// [] -> os colchetes representa 'entre um valor e outro'
// ( -> está chave representa 'maior que' E este colchete ] -> representa 'até tal valor'

// Valores: ([0,25], (25,50], (50,75], (75,100])
    $valor = (float) readline();

    if (($valor >= 0) && ($valor <= 25)) {
        echo 'Intervalo [0,25]' . PHP_EOL;
    }

    elseif (($valor > 25) && ($valor <= 50)) {
        echo 'Intervalo (25,50]' . PHP_EOL;
    }

    elseif (($valor > 50) && ($valor <= 75)) {
        echo 'Intervalo (50,75]' . PHP_EOL;
    }

    elseif (($valor > 75) && ($valor <= 100)) {
        echo 'Intervalo (75,100]' . PHP_EOL;
    }

    else {
        echo 'Fora de intervalo' . PHP_EOL;
    }




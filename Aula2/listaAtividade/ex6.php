<?php

    $num = readline("Informe o numero que deseja saber a tabuada: ");

    $contador = 1;

    while ($contador <= 10){
        echo $contador * $num . PHP_EOL;
        $contador++;
    }

?>
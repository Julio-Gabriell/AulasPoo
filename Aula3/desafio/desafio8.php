<?php

    $matriz = [ 
    [1, 2, 3], 
    [4, 5, 6], 
    [7, 8, 9]
    ];

    $tamanho = count($matriz); 
    $matrizInvertida = array_fill(0, $tamanho, array_fill(0, $tamanho, 0)); 

    $matrizInvertida = array_fill(0, $tamanho, array_fill(0, $tamanho, 0));

    for ($i = 0; $i < $tamanho; $i++) {
        for ($j = 0; $j < $tamanho; $j++) {
            $matrizInvertida[$j][$tamanho - 1 - $i] = $matriz[$i][$j];
        }
    }

    foreach ($matrizInvertida as $linha) {
    echo implode(", ", $linha) . PHP_EOL;
}

?>
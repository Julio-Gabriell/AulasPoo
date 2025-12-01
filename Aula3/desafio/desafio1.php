<?php

    $matriz = [
        [2, 5, 3],
        [1, 0, 4],
        [7, 2, 1] 
    ];

    $maiorValor = 0;
    $totalItens = 0;
    

    foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        $totalItens += $valor;
        if ($valor > $maiorValor){
            $maiorValor = $valor;
            $posicao = array_search($linha, $matriz) + 1;
            $posicao2 = array_search($valor, $linha) + 1;
        }else{
            continue;
        }
    }
    echo PHP_EOL;
    }
    echo "Total de produtos: " . $totalItens . PHP_EOL;
    echo "Maior quantidade: " . $maiorValor . " na posição (" . $posicao . ") (" . $posicao2 . ")" . PHP_EOL;

?>
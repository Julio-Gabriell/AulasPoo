<?php

    $matriz = [ 
        [0,0,0,0,0], 
        [0,1,0,0,0], 
        [0,1,0,0,0], 
        [0,1,0,0,0], 
        [0,0,0,0,0] 
    ];

    $linhaInicial = intval(readline("informe a linha inicial: ")) - 1;
    $colunaInicial = intval(readline("informe a coluna inicial: ")) - 1; 

    $linhaFinal = intval(readline("informe a linha final: ")) - 1;
    $colunaFinal = intval(readline("informe a coluna final: ")) - 1;

    $linhaMeio = $linhaInicial + (($linhaFinal - $linhaInicial) / 2);
    $colunaMeio = $colunaInicial + (($colunaFinal - $colunaInicial) / 2);

    if (
    $matriz[$linhaInicial][$colunaInicial] === 1 &&

    $matriz[$linhaMeio][$colunaMeio] === 1 &&

    $matriz[$linhaFinal][$colunaFinal] === 0 &&

    (
        ($linhaInicial === $linhaFinal && abs($colunaInicial - $colunaFinal) === 2) ||
        ($colunaInicial === $colunaFinal && abs($linhaInicial - $linhaFinal) === 2)
    )
) {
    $matriz[$linhaInicial][$colunaInicial] = 0;
    $matriz[$linhaMeio][$colunaMeio] = 0;
    $matriz[$linhaFinal][$colunaFinal] = 1;

    echo "Movimento realizado com sucesso!" . PHP_EOL;
} else {
    echo "Movimento inválido!" . PHP_EOL;
}

foreach ($matriz as $linha) {
    echo implode(" ", $linha) . "\n";
}

?>
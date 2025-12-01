<?php 

$assentos =  [
    [1, 1, 0, 1, 1], 
    [1, 0, 0, 1, 1], 
    [1, 1, 1, 1, 0], 
    [0, 1, 1, 1, 1], 
    [1, 1, 1, 1, 1] 
];

$vazio = 0;

$posicoes = [
    'linha' => [],
    'coluna' => [],
];


for ($i = 0; $i < count($assentos); $i++) {
    for ($j = 0; $j < count($assentos[$i]); $j++) {
        echo " " . $assentos[$i][$j] . " ";
        if ($assentos[$i][$j] == 0) {
            $vazio++;
            array_push($posicoes['linha'], $i + 1);
            array_push($posicoes['coluna'], $j + 1);
        }
    }
    echo PHP_EOL;
}

echo $vazio . PHP_EOL;

echo $posicoes['linha'][0] . " , " . $posicoes['coluna'][0];

?>
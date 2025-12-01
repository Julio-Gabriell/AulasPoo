<?php

    $matriz =  [ 
        [2, 9, 4], 
        [7, 5, 3], 
        [6, 1, 8]
    ];

    $percorridos = [];
    $valido = true;

    for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        if ($matriz[$i][$j] > 9 or $matriz[$i][$j] < 1) {
            $valido = false;
            break 2;
        }else{
            if(array_search($matriz[$i][$j], $percorridos) !== false){
                $valido = false;
                break 2;
            }
            $percorridos[] = $matriz[$i][$j];
        }
    }
}

    if($valido){
        echo "sudoku valido";
    }else{
        echo "sudoku invalido";
    }

?>
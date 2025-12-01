<?php

    $array = [10, 20, 30, 40];

    $x = 30;

    $resultado = array_search($x, $array);

    if($resultado){
        echo "Econtrado na posição:" . $resultado;
    }else{
        echo "Não encontrado";
    }
?>
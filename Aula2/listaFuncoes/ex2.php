<?php

    function dobraNum($num){
        return $num * 2;
    }

    $num = readline("Digite seu num que deseja saber o dobro: ");

    $resultado = dobraNum($num);

    echo "O dobro do numero escolhido é " . $resultado;

?>
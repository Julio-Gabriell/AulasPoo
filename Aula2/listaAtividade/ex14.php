<?php

    function calcularMaioridade($idade){
        if ($idade >= 18){
            return "De maior";
        }else{
            return "De menor";
        }
    }

    $idade = readline("Digite sua idade: ");

    $resultado = calcularMaioridade($idade);

    echo "A pessoa é : " . $resultado . PHP_EOL;

?>
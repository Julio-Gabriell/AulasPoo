<?php

    function somar($num1, $num2){
        return $num1 + $num2;
    }

    $num1 = readline("Digite seu primeiro numero: ");
    $num2 = readline("Digite seu segundo numero: ");

    $resultado = somar($num1, $num2);

    echo "A soma dos dois numeros é ". $resultado;

?>
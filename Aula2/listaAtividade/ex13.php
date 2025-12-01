<?php

    function calcularMedia($n1, $n2, $n3){
        return ($n1 + $n2 + $n3) / 3;
    }

    $num1 = readline("Digite seu primeiro num: ");
    $num2 = readline("Digite seu segundo num: ");
    $num3 = readline("Digite seu terceiro num: ");

    $resultado = calcularMedia($num1, $num2, $num3);

    echo "A média desses numeros é: " . $resultado . PHP_EOL;

?>
<?php

    function separarParesEImpares($numeros){
    $resultado = ['pares' => [], 'impares' => []];
    foreach ($numeros as $num){
        if ($num % 2 == 0){
            array_push($resultado['pares'], $num);
        } else {
            array_push($resultado['impares'], $num);
        }
    }
    return $resultado;
}

    $numeros = [];

    while (true){
        $num = readline("Digite seus numeros ou 0 para sair: ");
        if ($num != 0){
            array_push($numeros, $num);
        }else{
            break;
        }
    }

    echo "Os pares são: " . implode(", ",separarParesEImpares($numeros)['pares']) . PHP_EOL ."E os impares: " . implode(", ",separarParesEImpares($numeros)['impares']);

?>
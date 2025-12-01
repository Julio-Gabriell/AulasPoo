<?php

    function quadrado($num){
        return $num ** 2;
    }

    function mostrarquadrado($num){
        $resultado = quadrado($num);
        echo "O quadrado do seu numero é: " . $resultado;
    }

    $num = readline("Digite o numero que deseja saber o quadrado dele: ");

    
    echo mostrarquadrado($num);

?>
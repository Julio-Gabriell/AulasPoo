<?php

    $lista = [];

    while (true){
        $produto = readline("Digite seu novo produto ou digite 0 para sair: ");
        if ($produto != 0){
            array_push($lista, $produto);
        }else{
            break;
        }
    }

    $i = 1;

    foreach ($lista as $item) {
        echo $i . "° item da lista: " . $item . PHP_EOL;
        $i++;
    }

?>
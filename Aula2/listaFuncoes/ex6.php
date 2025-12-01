<?php


    function contarElementos($frutas){
        $quantidade = 0;
        foreach ($frutas as $fruta) {
            $quantidade++;
        }
        return $quantidade;
    }

    $frutas = ['Maça', 'Pera', 'Morango', 'Banana', 'Uva'];

    $resultado = contarElementos($frutas);

    echo "A quantidade de itens é de " . $resultado . " itens nessa lista";
?>
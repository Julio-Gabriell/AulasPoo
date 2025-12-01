<?php

    $nome = "Julio";
    $idade = 18;

    function maioridade($nome, $idade){
        if ($idade >=18){
            echo "Olá $nome, você é maior de idade" . PHP_EOL;
        }else{
            echo "Olá $nome, você não é maior de idade" . PHP_EOL;
        }
    }

    function maioridade2($idade){
        echo $idade >= 18 ? "Maior de Idade" : "Menor de Idade";
    }

    $resultado1 = maioridade($nome, $idade);
    $resultado2 = maioridade2($idade);

?>
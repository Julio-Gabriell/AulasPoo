<?php

    function saudacao($nome){
        return "Olá, " . $nome . " Seja bem-vindo(a).";
    }

    $nome = readline("Digite seu nome: ");

    $resultado = saudacao($nome);

    echo $resultado;

?>
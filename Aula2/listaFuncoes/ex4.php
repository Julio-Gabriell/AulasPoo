<?php

    function mensagem($texto){
        if (empty($texto)){
            return "Sem mensagens";
        }else{
            return $texto;
        }
    }

    $texto = readline("Digite sua mensagem: ");

    $resultado = mensagem($texto);

    echo "Sua mensagem é: " . $resultado;

?>
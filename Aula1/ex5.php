<?php

    function palindromo($palavra){
        $invertida = "";
        for ($i = 0; $i < strlen($palavra); $i++) {
            $invertida = $palavra[$i] . $invertida;
        }
        if ($invertida == $palavra){
            return "A palavra é um palíndromo";
        }else{
            return "A palavra não é um palíndromo";
        }
    }

    $resultado = palindromo("ovo");

    echo $resultado;

?>
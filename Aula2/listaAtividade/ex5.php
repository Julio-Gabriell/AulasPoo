<?php

    while (true){
        $nota = readline("Informe sua nota: ");
        if ($nota >= 0 && $nota <= 10){
            if ($nota >= 7){
                echo "Aprovado";
                break;
            }else if ($nota >= 5 && $nota < 7){
                echo "Recuperação";
                break;
            }else{
                echo "Reprovado";
                break;
            }
        }else{
            continue;
        }
    }

?>
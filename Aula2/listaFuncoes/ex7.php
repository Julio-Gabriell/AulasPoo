<?php 

        function verificarAprovacao($nota){
            if ($nota >= 0 && $nota <= 10){
            if ($nota >= 7){
                return "Aprovado";
            }else if ($nota >= 5 && $nota < 7){
                return "Recuperação";
            }else{
                return "Reprovado";
            }
        }else{
            return "Nota inválida";
        }
    }

    $nota = readline("Informe sua média final: ");

    $resultado = verificarAprovacao($nota);

    echo "Com essa nota o aluno está: " . $resultado;
?>
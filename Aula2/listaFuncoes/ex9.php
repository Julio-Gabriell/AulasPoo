<?php

    function calcularMedia($n1, $n2, $n3){
        return ($n1 + $n2 + $n3) / 3;
    }

    function resultadoAluno($nome, $n1, $n2, $n3){
        $media = calcularMedia($n1, $n2, $n3);
            if ($media >= 0 && $media <= 10){
            if ($media >= 7){
                echo "O aluno " . $nome . " obteve média " . $media . " e está APROVADO";
            }else if ($media >= 5 && $media < 7){
                echo "O aluno " . $nome . " obteve média " . $media . " e está RECUPERAÇÃO";
            }else{
                echo "O aluno " . $nome . " obteve média " . $media . " e está REPROVADO";
            }
        }else{
            echo "Nota(s) invalida";
        }
    }   

    $nome = readline("Digite seu nome: ");
    $num1 = readline("Digite seu primeiro num: ");
    $num2 = readline("Digite seu segundo num: ");
    $num3 = readline("Digite seu terceiro num: ");

    echo $resultado = resultadoAluno($nome, $num1, $num2, $num3);

?>
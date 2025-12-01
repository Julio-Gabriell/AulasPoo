<?php

    $alunos = [
        ['Nome' => 'Julio', 'Nota1' => 10, 'Nota2' => 9, 'Nota3' => 8],
        ['Nome' => 'João Pedro', 'Nota1' => 10, 'Nota2' => 9, 'Nota3' => 8],
        ['Nome' => 'Luiz Felipe', 'Nota1' => 10, 'Nota2' => 9, 'Nota3' => 8],
        ['Nome' => 'Vinicius', 'Nota1' => 10, 'Nota2' => 9, 'Nota3' => 8],
    ];

    foreach ($alunos as $aluno) {
        $media = number_format(($aluno['Nota1'] + $aluno['Nota2'] + $aluno['Nota3']) / 3, 2);
        echo "O aluno: " . $aluno['Nome'] . "teve " . $media . " de média" . PHP_EOL;
    }

?>
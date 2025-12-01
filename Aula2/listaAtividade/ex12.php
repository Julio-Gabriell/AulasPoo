<?php

    $cidades = ['Campos Novos Pta', 'Marilia', 'Ourinhos', 'Ibirarema', 'Palmital'];

    $cidadeUser = readline("Digite a sua cidade: ");

    if(in_array($cidadeUser, $cidades)){
        echo "A cidade está, e se encontra na posição " . array_search($cidadeUser, $cidades) + 1 . " da lista" . PHP_EOL;
    }else{
        echo "A cidade não está na lista";
    }
?>
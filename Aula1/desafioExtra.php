<?php
$pessoas = [
    ["nome" => "Ana", "idade" => 25],
    ["nome" => "João", "idade" => 17],
    ["nome" => "Maria", "idade" => 19]
];

function verificarMaioridade($idade) {
    if ($idade >= 18){
        return "Maior";
    }else{
        return "Menor";
    }
}

foreach ($pessoas as $pessoa) {
    $status = verificarMaioridade($pessoa["idade"]);
    echo $pessoa["nome"] . " (" . $pessoa["idade"] . " anos) é " . $status . " de idade " . PHP_EOL;
}
?>
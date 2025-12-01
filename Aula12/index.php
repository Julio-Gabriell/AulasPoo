<?php 

    require_once 'exercicio1/Veiculo.php';
    require_once 'exercicio1/Carro.php';
    require_once 'exercicio1/Moto.php';

    $carro = new Carro("toyota", "Corolla", 2020, 4);

    $moto = new Moto("Yamaha", "Mt-07", 2018);

    echo $carro->acelerar(50) . "<br>";
    echo $carro->abrirPorta(1) . "<br>";

    echo $moto->acelerar(30) . "<br>";
    echo $moto->empinar() . "<br>";

    echo $carro->frear(20) . "<br>";
    echo $moto->frear(20) . "<br>";
<?php 

    require_once '../Carro.php';

    try {
        $veicul01 = new Carro('Fiat', 'Uno', 2015);
        echo $veicul01->getAno() . "<br>";
        echo $veicul01->getModelo() . "<br>";
        echo $veicul01->getMarca() . "<br>";


        echo $veicul01->alterarModelo(  "Palio") . "<br>";
        echo $veicul01->alterarAno(2026) . "<br>";

        echo $veicul01->getAno() . "<br>";
        echo $veicul01->getModelo() . "<br>";

        $veicul02 = new Carro('', 'Puro Sangue', 2022);
  
    } catch(InvalidArgumentException $e){
        echo $e->getMessage();
    }
<?php 

    require_once "animal/Animal.php";
    require_once "animal/Cachorro.php";
    require_once "animal/Gato.php";
    require_once "animal/Pato.php";

    // $animal = new Animal("Cachorro");
    // $cachorro = new Cachorro("Rex");

    // echo $animal->descrever() . "<br>";
    // echo $animal->fazBarulho() . "<br>";

    // echo $cachorro->descrever() . "<br>";
    // echo $cachorro->fazBarulho() . "<br>";

    // $animal = new Animal("Gato");
    // $gato = new Gato("Rengar");

    // echo $gato->descrever() . "<br>";
    // echo $gato->fazBarulho() . "<br>";

    // $animal = new Animal("Pato");
    // $pato = new Pato("Donald");

    // echo $pato->descrever() . "<br>";
    // echo $pato->fazBarulho() . "<br>";

    $animais = [
        new Cachorro("caramelo"),
        new Gato("marrie"),
        new Pato("patolino"),
    ];

    foreach ($animais as $animal) {
        echo $animal->descrever() . "<br>";
        echo $animal->fazBarulho() . "<br>";

        echo str_repeat('-', 30) . "<br>";
    }
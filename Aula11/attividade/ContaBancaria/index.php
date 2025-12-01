<?php 

    require_once 'ContaBancaria.php';
    require_once 'ContaCorrente.php.php';
    require_once 'ContaPoupanca.php';

    $contaCorrente = new ContaCorrente("Luiz Barbosa", 30, 500);
    $contaPoupanca = new ContaPoupanca("Julio Gabriel", 50);

    $contaCorrente->deposito(50);
    $contaCorrente->saque(36);

    $contaPoupanca->deposito(97);
    $contaPoupanca->saque(45);
    $contaPoupanca->renderJuros(5);
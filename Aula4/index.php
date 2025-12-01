<?php

require_once "Pessoa.php";
require_once "ContaBancaria.php";

$pessoa1 = new Pessoa('Higu, por favor', '123.456.789-10');

$conta1 = new ContaBancaria('000123-4', 3.29, $pessoa1);

$pessoa1->adicionarConta($conta1);

$conta1->depositar(5000.00);
$conta1->sacar(20.00);

$conta2 = new ContaBancaria('000345-4', 100.00, $pessoa1);

$pessoa1->adicionarConta($conta2);

$conta2->depositar(80.00);
$conta2->sacar(30.00);

echo "Titular: {$pessoa1->nome} <br>";
echo "Cpf: {$pessoa1->cpf} <br>";
echo "Saldo: " . number_format($conta1->getsaldo(), 2) . "<br>";
echo "N° Conta: {$conta1->getNumero()} <br>";

///////////////////////////// outra pessoa

$pessoa2 = new Pessoa('Barbosa', '987.654.321-01');

$conta3 = new ContaBancaria('000678-4', 100.00, $pessoa2);

$pessoa2->adicionarConta($conta3);

$conta3->depositar(30.00);
$conta3->sacar(40.00);


$conta4 = new ContaBancaria('00987-4', 100.00, $pessoa2);

$pessoa2->adicionarConta($conta4);

$conta4->depositar(80.00);
$conta4->sacar(80.00);

$conta5 = new ContaBancaria('000658-4', 100.00, $pessoa2);

$pessoa2->adicionarConta($conta5);

$conta5->depositar(20.00);
$conta5->sacar(70.00);

///////////////////////////// outra pessoa

$pessoa3 = new Pessoa('Jooj', '528.726.648-07');

$conta6 = new ContaBancaria('000420-4', 800.00, $pessoa3);

$pessoa3->adicionarConta($conta6);

$conta6->depositar(90.00);
$conta6->sacar(10.00);


$conta7 = new ContaBancaria('00987-4', 100.00, $pessoa3);

$pessoa3->adicionarConta($conta7);

$conta7->depositar(80.00);
$conta7->sacar(80.00);

$conta8 = new ContaBancaria('000658-4', 100.00, $pessoa3);

$pessoa3->adicionarConta($conta8);

$conta8->depositar(90.00);
$conta8->sacar(40.00);

$pessoa2->getDados();
$pessoa3->getDados();
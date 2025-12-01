<?php

    class Pessoa 
    {
        public string $nome;
        public string $cpf;
        public array $contas;

        # metodo responsavel por iniciar o objeto da classe
        # primeiro metodoto executado automaticamente ao fazer new Pessoa();

        public function __construct(string $nome, string $cpf) 
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->contas = [];
        }
        
        public function adicionarConta(ContaBancaria $conta): bool
       {
            if (empty($conta)) {
                return false;
            } else {
                $this->contas[] = $conta;
                return true;
            }
        }

        // private function ValidarusoConta(string $numeroConta):bool
        // {

        //     foreach ($this->contas as $conta) {
        //         if ($this->$conta->getNumeroConta() === $numeroConta) {
        //             return false;
        //         }
        //     }

        //     return true;
        // }

        public function listarConta():array
        {
            return $this->contas;
        }

        public function hello(): string
        {
            return "ola, {$this->nome}! Vc é um cliente bobao";
        }

        public function getDados()
        {
            echo "Titular: {$this->nome} <br>";
            echo "Cpf: {$this->cpf} <br><br>";

            foreach ($this->listarConta() as $conta) {
                echo "N° Conta: {$conta->getNumero()} <br>";
                echo "Saldo: " . number_format($conta->getSaldo(), 2) . "<br><br>";
            }
        }   
    }

    // $usuario1 = new Pessoa("Julio", "487.840.658-50");
    // echo $usuario1->hello() . PHP_EOL;

    // $contas = $usuario1->listarConta();

    // $usuario1->adicionarConta("12345-6");
    // $contas = $usuario1->listarConta();

    // if (!empty($contas)) {
    //     echo "Contas do cliente {$usuario1->nome}";
    //     for ($i = 0; $i < count($contas); $i++) {
    //         echo $contas[$i] . "<br>";
    //     }
    // } else {
    //     echo "Usuario nao possui contas";
    // }
?>
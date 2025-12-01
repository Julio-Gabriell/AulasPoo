<?php 

    class Conta
    {
        private string $banco;
        private int $agencia;
        private string $numeroConta;
        private float $saldo;

        public function __construct(string $banco, int $agencia, string $numeroConta, float $saldo = 0.0)
        {
            $this->setBanco($banco);
            $this->setAgencia($agencia);
            $this->setNconta($numeroConta);
            $this->setSaldo($saldo);
        }

        public function setBanco($banco)
        {
            $this->banco = $banco;
        }
        public function setAgencia($agencia)
        {
            $this->agencia = $agencia;
        }
        public function setNconta($numeroConta)
        {
            $this->numeroConta = $numeroConta;
        }
        private function setSaldo($saldo)
        {
            if ($saldo <= 0) {
                $saldo = 0.0;
            }

            $this->saldo = $saldo;
        }

        public function getBanco(): string
        {
            return $this->banco;
        }
        public function getAgencia(): int
        {
            return $this->agencia;
        }
        public function getNconta(): string
        {
            return $this->numeroConta;
        }
        public function getSaldo(): float
        {
            return $this->saldo;
        }

        public function deposito($valor)
        {
            if ($valor > 0) {
                $this->setSaldo($this->saldo + $valor);
                return true;
            } else {
                return false;
            }
        }

        public function saque($valor)
        {
            if ($valor <= $this->saldo and $valor > 0) {
                $this->setSaldo($this->saldo - $valor);
                return $valor;
            } else {
                return false;
            }
        }
    }

    $conta1 = new Conta("Inter", 0001, "123-4", 100);
    echo "Saldo inicio:" . number_format($conta1->getSaldo(), 2) . "<br>";
    echo "Valor do saque:" . number_format($conta1->saque(50), 2) . "<br>";
    $conta1->deposito(25);
    echo "Saldo final:" . number_format($conta1->getSaldo(), 2) . "<br>";

    echo "Conta 2 <br>";

    $conta2 = new Conta("Banco do Brasil", 0001, "432-1");
    echo "Saldo inicio:" . number_format($conta2->getSaldo(), 2) . "<br>";
    echo "Valor do saque:" . number_format($conta2->saque(10), 2) . "<br>";
    $conta2->deposito(valor: 20);
    echo "Saldo final:" . number_format($conta2->getSaldo(), 2) . "<br>";
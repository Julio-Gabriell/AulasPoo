<?php 

    class ContaBancaria
    {
        protected string $titular;
        protected float $saldo;

        public function __construct(string $titular, float $saldo = 0.0)
        {
            $this->setTitular($titular);
            $this->setSaldo($saldo);
        }

        public function setTitular($titular)
        {
            if (!empty($titular)) {
                $this->titular = $titular;
            } else {
                $this->titular = "Conta sem nome";
            }
        }

        protected function setSaldo($saldo)
        {
            if ($saldo <= 0) {
                $saldo = 0.0;
            }

            $this->saldo = $saldo;
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

        public function getSaldo(): float
        {
            return $this->saldo;
        }
    }
<?php 

    require_once 'ContaBancaria.php';

    class ContaCorrente extends ContaBancaria
    {
        private float $limite;

        public function __construct(string $titular, float $saldo = 0.0, float $limite)
        {
            $this->setTitular($titular);
            $this->setSaldo($saldo);
            $this->setLimite($limite);
        }

        public function setLimite($limite): void
        {
            if (!empty($limite) and $limite > 0) {
                $this->limite = $limite;
            } else {
                $this->limite = 0.00;
            }
        }

        public function getLimite(): float
        {
            return $this->limite;
        }

        public function saque($valor): mixed
        {
            if ($valor > 0 && $valor <= ($this->getSaldo() + $this->limite)) {
                $this->setSaldo($this->getSaldo() - $valor);
                return $valor;
            } else {
                return false;
            }
        }
    }
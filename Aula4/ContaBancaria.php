<?php 

    class ContaBancaria
    {
        private string $numero;
        private float $saldo;
        private Pessoa $titular;

        public function __construct(string $numero, float $saldo, Pessoa $titular)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->titular = $titular;
    }

    public function depositar(float $valor): bool
    {
        if ($valor <= 0) {
            return false;
        } else {
            $novosaldo = $this->saldo + $valor;
            $this->saldo = round($novosaldo, 2);
            return true;
        }
    }

    public function sacar(float $valor): ?float
    {
        if ($valor <= 0) {
            return null;
        } 

        if ($valor > $this->saldo) {
            return null;
        }

        $novosaldo = $this->saldo - $valor;
        $this->saldo = round($novosaldo, 2);
        return $valor;
    }

    // getters e setters

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getTitular(): Pessoa
    {
        return $this->titular;
    }

    } 

    

    
 
?>
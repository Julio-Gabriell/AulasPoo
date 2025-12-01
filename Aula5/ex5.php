<?php 
    class ContaBancaria
    {
        private float $saldo;
        private string $titular;

        public function __construct(float $saldo, string $titular)
    {
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

    public function exibirSaldo()
    {
        echo $this->titular . " | " . $this->saldo;
    }
}

    $conta1 = new ContaBancaria(100, "Julio");

    $conta1->depositar(20);
    $conta1->sacar(80);

    $conta1->exibirSaldo();
?>
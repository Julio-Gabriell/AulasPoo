    <?php 

        require_once 'ContaBancaria.php';

        class ContaPoupanca extends ContaBancaria
        {
            public function renderJuros($taxa)
            {
                if ($taxa <= 0) {
                    return "A taxa deve ser positiva";
                } else {
                    $juros = $this->getSaldo() * ($taxa / 100);
                    $this->setSaldo($this->getSaldo() + $juros);
                }
            }
        }
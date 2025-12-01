    <?php 

        require_once 'Veiculo.php';

        class Moto extends Veiculo
        {
            public function empinar()
            {
                if ($this->getVelocidade() > 20) {
                    return 'A moto ta empinando';
                } else {
                    return 'Velocidade insuficiente para empinar';
                }
            }
        }
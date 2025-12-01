<?php 

    require_once 'Veiculo.php';

    class Carro extends Veiculo
    {
        private int $portas;

        public function __construct(string $marca, string $modelo, int $ano, int $portas)
        {
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setAno($ano);
            $this->setVelocidadeAtual(0);
            $this->setPortas($portas);
        }
        public function setPortas($portas)
        {
            if (!empty($portas)) {
                $this->portas = $portas;
            } else {
                return 'Porta esta vazio';
            }
        }

        public function abrirPorta($numPorta)
        {
            if ($numPorta > 0 and $numPorta <= $this->portas) {
                return "A porta {$numPorta}° foi aberta";
            } else {
                return 'Essa porta não existe';
            }
        }
    }
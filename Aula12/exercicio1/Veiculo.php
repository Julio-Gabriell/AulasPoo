<?php 
    class Veiculo
    {
        private string $marca;
        private string $modelo;
        private int $ano;
        private float $velocidadeAtual;

        public function __construct(string $marca, string $modelo, int $ano)
        {
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setAno($ano);
            $this->setVelocidadeAtual(0);
        }

        public function setMarca($marca){
            if (!empty($marca)) {
                $this->marca = $marca;
            } else {
                $this->marca = "Marca esta vazia";
            }
        }
        public function setModelo($modelo){
            if (!empty($modelo)) {
                $this->modelo = $modelo;
            } else {
                $this->modelo = "Modelo esta vazia";
            }
        }
        public function setAno($ano){
            if ($ano < 1886 or $ano > date('Y')) {
                $this->ano = $ano;
            }
        }
        public function setVelocidadeAtual($velocidadeAtual){
            $this->velocidadeAtual = $velocidadeAtual;
        }

        public function getMarca(): string
        {
            return $this->marca;
        }
        public function getModelo(): string
        {
            return $this->modelo;
        }
        public function getAno(): int
        {
            return $this->ano;
        }
        public function getVelocidade(): float
        {
            return $this->velocidadeAtual;
        }

        public function acelerar($quantidade)
        {
            if ($quantidade > 0) {
                $this->velocidadeAtual += $quantidade;
                return 'Velocidade atual ' . $this->velocidadeAtual;
            } else {
                return 'Apertou o freio em vez do acelerador';
            }
        }
        public function frear($quantidade)
        {
            if ($quantidade <= $this->velocidadeAtual) {
                $this->velocidadeAtual -= $quantidade;
                return 'Velocidade atual ' . $this->velocidadeAtual;
            } else {
                return 'Freiou mais do que deveria, carro morreu (aperte a embreagem)';
            }
        }
    }
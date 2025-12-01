<?php 

    class Carro
    {
        private string $marca;
        private string $modelo;
        private int $ano;
        
        public function __construct(string $marca, string $modelo, int $ano)
        {
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setAno($ano);
        }

        public function setMarca($marca)
        {
            if (empty($marca)) {
                throw new InvalidArgumentException("Marca esta vazio!");
            } 

            $this->marca = $marca;
        }
        public function setModelo($modelo)
        {
            if (empty($modelo)) {
                throw new InvalidArgumentException("Modelo esta vazio!");
            } 

            $this->modelo = $modelo;
        }
        public function setAno($ano)
        {
            if (empty($ano)) {
                throw new InvalidArgumentException("Ano esta vazio!");
            } 

            if ( $ano < 1886 or $ano > 2025 ) {
                throw new InvalidArgumentException("Data Invalida!");
            }

            $this->ano = $ano;
        }
        public function getMarca(): string
        {
            return $this->marca;
        }
        public function getModelo()
        {
            return $this->modelo;
        }
        public function getAno(): int
        {
            return $this->ano;
        }

        public function alterarMarca($novaMarca)
        {
            $this->setMarca($novaMarca);
        }
        public function alterarModelo($novaModelo)
        {
            $this->setModelo($novaModelo);
        }
        public function alterarAno($novoAno)
        {
            $this->setAno($novoAno);
        }
    }
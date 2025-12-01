<?php 

    require_once 'Item.php';

    class Objeto extends Item
    {
        private float $peso;

        public function __construct(string $nome, string $descricao, float $peso)
        {
            $this->setNome($nome);
            $this->setDescricao($descricao);
            $this->setPeso($peso);
        }
         public function setPeso($peso): void
        {
            if ($peso > 0) {
                $this->peso = $peso;
            } else {
                $this->peso = 0.0;
            }
        }

        public function getPeso(): string
        {
            return $this->peso;
        }

        public function __toString(): string 
        {
            return "Objeto: {$this->getNome()} ({$this->getDescricao()}) - Peso: {$this->getPeso()}kg";
        }
    }
?>
<?php 

    require_once 'Item.php';

    class Pasta extends Item
    {

        private string $categoria;

        public function __construct(string $nome, string $descricao, string $categoria)
        {
            $this->setNome($nome);
            $this->setDescricao($descricao);
            $this->setCategoria($categoria);
        }

        public function setCategoria($categoria): void
        {
            if (!empty($categoria)) {
                $this->categoria = $categoria;
            } else {
                $this->categoria = "Categoria criação vazia";
            }
        }

        public function getCategoria(): string
        {
            return $this->categoria;
        }

        public function __toString(): string 
        {
            return "Pasta: {$this->getNome()} ({$this->getDescricao()}) - Categoria: {$this->getCategoria()}";
        }
    }
?>
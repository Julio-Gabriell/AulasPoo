<?php 
    
    class Item
    {
        private string $nome;
        private string $descricao;

        public function __construct(string $nome, string $descricao)
        {
            $this->setNome($nome);
            $this->setDescricao($descricao);
        }

        public function setNome($nome): void
        {
            if (!empty($nome)) {
                $this->nome = $nome;
            } else {
                $this->nome = "Nome vazio";
            }
        }
        public function setDescricao($descricao): void
        {
            if (!empty($descricao)) {
                $this->descricao = $descricao;
            } else {
                $this->descricao = "Descrição vazio";
            }
        }

        public function getNome(): string
        {
            return $this->nome;
        }
        public function getDescricao(): string
        {
            return $this->descricao;
        }
    }
?>
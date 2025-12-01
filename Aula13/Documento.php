<?php 

    require_once 'Item.php';

    class Documento extends Item
    {

        private string $dataCriacao;

        public function __construct(string $nome, string $descricao, string $dataCriacao)
        {
            $this->setNome($nome);
            $this->setDescricao($descricao);
            $this->setDataCriacao($dataCriacao);
        }

        public function setDataCriacao($dataCriacao): void
        {
            if (!empty($dataCriacao)) {
                $this->dataCriacao = $dataCriacao;
            } else {
                $this->dataCriacao = "Data criação vazia";
            }
        }

        public function getDataCriacao(): string
        {
            return $this->dataCriacao;
        }

        public function __toString(): string
        {
            return "Documento: {$this->getNome()} - Criado em {$this->getDataCriacao()} ({$this->getDescricao()})";
        }
    }
?>
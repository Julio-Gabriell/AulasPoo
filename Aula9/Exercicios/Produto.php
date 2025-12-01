<?php 

    class Produto
    {
        private string $nome;
        private float $preco;
        private int $estoque;

        public function __construct(string $nome, float $preco, int $estoqueInicial = 0)
        {
            $this->setNome($nome);
            $this->setPreco($preco);
            $this->estoque = $estoqueInicial;
        }

        public function setNome($nome)
        {
            if (empty($nome)) {
                throw new InvalidArgumentException("Nome do produto esta vazio!");
            }

            $this->nome = $nome;
        }

        public function setPreco($preco)
        {
            if ($preco <= 0) {
                throw new InvalidArgumentException("Preço do produto é invalido!");
            }

            $this->preco = $preco;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getPreco()
        {
            return $this->preco;
        }

        public function getEstoque()
        {
            return $this->estoque;
        }

        public function atualizarPreco(float $novoPreco)
        {
            $this->setPreco(number_format($novoPreco, 2));
        }

        public function repor(int $qtd)
        {
            if ($qtd <= 0) {
                throw new InvalidArgumentException("Quantidade de reposição invalida!");
            }

            $this->estoque += $qtd;
        }
        public function vender(int $qtd)
        {
            if ($qtd <= 0 or $qtd > $this->estoque) {
                throw new InvalidArgumentException("Venda invalida!");
            }

            $this->estoque -= $qtd;
        }
    }
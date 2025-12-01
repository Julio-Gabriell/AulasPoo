<?php 

    class produto
    {
        public string $nome;
        public float $preco;

        public function __construct(string $nomeProduto, float $precoProduto)
        {
            $this->nome = $nomeProduto;
            $this->preco = $precoProduto;
        }

        public function aplicarDesconto(float $percentual)
        {
            if ($percentual > 0) {
                $desconto = $this->preco * ($percentual / 100);
                $novoPreco = $this->preco - $desconto;

                $this->preco = $novoPreco;
            } else {
                return false;
            }
        }

        public function exibirProduto()
        {
            echo $this->nome . "|" . $this->preco;
        }
       
    }

    $produto1 = new produto("UVA", 15);

    $produto1->aplicarDesconto(2);

    $produto1->exibirProduto()

?>
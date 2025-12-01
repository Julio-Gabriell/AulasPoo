<?php 


    class EstoqueProduto 
    {
        public string $nome;
        public float $precoUnitario;
        public int $quantidade;

        public function __construct(string $nomeProduto, float $precoUnitarioProduto)
        {
            $this->nome = $nomeProduto;
            $this->precoUnitario = $precoUnitarioProduto;
            $this->quantidade = 0;
        }

        public function repor($quantidadeReposicao){
            if ($quantidadeReposicao > 0) {
                $this->quantidade += $quantidadeReposicao;
                echo "$quantidadeReposicao unidades de $this->nome foram adicionadas ao estoque";
            } else {
                return false;
            }
        }

        public function retirar($quantidadeRetirada) 
        {
            if ($quantidadeRetirada > 0 and $quantidadeRetirada <= $this->quantidade) {
                $this->quantidade -= $quantidadeRetirada;
                echo "$quantidadeRetirada unidades de $this->nome foram adicionadas ao estoque";
            } else {
                echo "Retirada negada";
            }
        }

        public function aplicarDesconto($percentual)
        {
            if ($percentual >= 0 and $percentual <= 100) {
                $this->precoUnitario = $this->precoUnitario - ($percentual * $this->precoUnitario) / 100;
            } else {
                return false;
            }
        }

        public function valorEmEstoque()
        {
            echo "O valor de estoque atual é: " . $this->precoUnitario * $this->quantidade;
        }
    }

    $produto1 = new EstoqueProduto("Café", 18.50);
    echo $produto1->repor(20) . "<br>";
    echo $produto1->valorEmEstoque() . "<br>";
    echo $produto1->retirar(5) . "<br>";
    echo $produto1->valorEmEstoque() . "<br>";
    echo $produto1->retirar(30) . "<br>";
    echo $produto1->valorEmEstoque() . "<br>";
    echo $produto1->aplicarDesconto(10);
    echo $produto1->valorEmEstoque() . "<br>";
?>
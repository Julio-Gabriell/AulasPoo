<?php 

    include_once 'Produto.php';

    class Pedido
    {
        private string $numeroPedido;
        private array $itens = [];
        private float $valorTotal = 0.0;

        public function __construct(string $numeroPedido)
        {
            $this->setNumeroPedido($numeroPedido);
        }

        public function setNumeroPedido($numeroPedido)
        {
            if (empty($numeroPedido)) {
                throw new InvalidArgumentException("Numero do pedido vazio!");
            }

            $this->numeroPedido = $numeroPedido;
        }

        public function getItens(){
            return $this->itens;
        }

        public function valorTotal()
        {
            return $this->valorTotal;
        }

        public function adicionarItem(Produto $produto, int $qtd)
        {
            if ($qtd <= 0) {
                throw new InvalidArgumentException("Quantidade invalida");
            }

            $produto->vender($qtd);

            $subtotal = $produto->getPreco() * $qtd;
            $this->itens[] = [
                'produto' => $produto,
                'nome' => $produto->getNome(),
                'quantidade' => $qtd,
                'subtotal' => $subtotal
            ];

        $this->recalcularValorTotal();
    }

    public function removerItem(string $nomeProduto)
    {
        foreach ($this->itens as $i => $item) {
            if ($item['nome'] === $nomeProduto) {
                $item['produto']->repor($item['quantidade']);

                unset($this->itens[$i]);
                $this->itens = array_values($this->itens);
                $this->recalcularValorTotal();
                return;
            }
        }

        throw new InvalidArgumentException("Produto não encontrado no pedido");
    }

    private function recalcularValorTotal()
    {
        $this->valorTotal = 0;
        foreach ($this->itens as $item) {
            $this->valorTotal += $item['subtotal'];
        }
    }

    public function exibirResumo()
    {
        $linhas = [];

        $linhas[] = "Pedido {$this->numeroPedido}";
        $linhas[] = "Itens:";

        foreach ($this->itens as $item) {
            $linhaItem = "{$item['nome']} (x{$item['quantidade']}) - R$ " . number_format($item['subtotal'], 2);
            $linhas[] = $linhaItem;
        }

        $linhas[] = "Total: R$ " . number_format($this->valorTotal, 2);

        return implode("<br>", $linhas);
    }
}
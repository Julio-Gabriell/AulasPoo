<?php 

require_once '../Produto.php';
require_once '../Pedido.php';

try {
    $teclado = new Produto('Teclado', 120.00, 10);
    $mouse = new Produto('Mouse', 80.00, 5);
    $pedido = new Pedido('P-001');

    $pedido->adicionarItem($teclado, 2);
    echo $pedido->exibirResumo() . "<br>";
    echo "Estoque atual do teclado: {$teclado->getEstoque()}" . "<br>";
    echo "Valor total: {$pedido->valorTotal()}" . "<br><br>";

    try {
        $pedido->adicionarItem($teclado, 50);
    } catch (InvalidArgumentException $e) {
        echo "Erro esperado: {$e->getMessage()}" . "<br>";
    }

    echo "Estoque do teclado apos falha: {$teclado->getEstoque()}" . "<br>";
    echo "Valor total do pedido: {$pedido->valorTotal()}" . "<br><br>";

    $pedido->removerItem('Teclado');
    echo $pedido->exibirResumo() . "<br>";
    echo "Estoque do teclado apos remoção: {$teclado->getEstoque()}" . "<br>";
    echo "Valor total: {$pedido->valorTotal()}" . "<br><br>";

    $teclado->atualizarPreco(150.00);
    $pedido->adicionarItem($teclado, 1);
    echo $pedido->exibirResumo() . "<br>";
    echo "Estoque do teclado: {$teclado->getEstoque()}" . "<br>";
    echo "Valor total: {$pedido->valorTotal()}" . "<br><br>";

} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

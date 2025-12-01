<?php

    function calcularSubtotal($precoUnitario, $quantidade)
    {
        return $valorItem = $precoUnitario * $quantidade;
    }

    function calcularTotalCompra($produtos)
    {
        $total = 0;
        foreach ($produtos as $produto) {
            $total += calcularSubtotal($produto['precoUnitario'], $produto['quantidade']);
        }
        return $total;
    }

    function aplicarDesconto($total, $possuiFidelidade){
        if ($possuiFidelidade){
            return $total * 0.90;
        }
        return $total;
    }

    function gerarCupom($produtos, $possuiFidelidade)
    {
        echo "===== CUPOM FISCAL =====\n";
        echo "Produto           Qtd   Unitário   Subtotal\n";
        echo "-------------------------------------------\n";

        foreach ($produtos as $produto) {
            $subtotal = calcularSubtotal($produto['precoUnitario'], $produto['quantidade']);
            echo str_pad($produto['nome'], 15); 
            echo str_pad($produto['quantidade'], 5, " ", STR_PAD_LEFT); 
            echo str_pad("R$ " . number_format($produto['precoUnitario'], 2, ',', '.'), 12, " ", STR_PAD_LEFT);
            echo str_pad("R$ " . number_format($subtotal, 2, ',', '.'), 12, " ", STR_PAD_LEFT); 
            echo "\n";
        }

        echo "-------------------------------------------\n";

        $totalBruto = calcularTotalCompra($produtos);
        $totalFinal = aplicarDesconto($totalBruto, $possuiFidelidade);
        $desconto = $totalBruto - $totalFinal;

        echo "Total Bruto: R$ " . number_format($totalBruto, 2, ',', '.') . "\n";
        echo "Desconto:    R$ " . number_format($desconto, 2, ',', '.') . "\n";
        echo "TOTAL A PAGAR: R$ " . number_format($totalFinal, 2, ',', '.') . "\n";
        echo "==========================\n";

    }

    $produtos = [];

    while (true) {
        $nomeProduto = readline("Digite o nome do produto (ou 0 para sair): ");
        if ($nomeProduto == "0") {
            break;
        }
        $precoUnitario = (float) readline("Digite o preço unitário do produto: ");
        $quantidade = (int) readline("Digite a quantidade do produto: ");

        $produtos[] = [
            'nome' => $nomeProduto,
            'precoUnitario' => $precoUnitario,
            'quantidade' => $quantidade
        ];
    }

    $fidelidade = readline("O cliente tem cartão fidelidade? S/N ");
    $fidelidade = strtoupper($fidelidade);
    $possuiFidelidade = $fidelidade === "S";

    if (!empty($produtos)) {
        gerarCupom($produtos, $possuiFidelidade);
    } else {
        echo "Nenhum produto foi registrado.\n";
    }

?>
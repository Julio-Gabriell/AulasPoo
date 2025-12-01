<?php
    $nomeProduto = $_POST['NomeProduto'];
    $precoProduto = $_POST['PrecoProduto'];
    $categoriaProduto = $_POST['CategoriaProduto'];

    $caminho = "produtos.txt";

    $produtos = [];
    if (file_exists($caminho) && filesize($caminho) > 0) {
        $conteudo = file_get_contents($caminho);
        $produtos = json_decode($conteudo, true);
    }

    $id = count($produtos) > 0 ? max(array_column($produtos, 'id')) + 1 : 1;

    $produtos[] = [
        "id" => $id,
        "Nome" => $nomeProduto,
        "Preco" => $precoProduto,
        "Categoria" => $categoriaProduto
    ];

    file_put_contents($caminho, json_encode($produtos, JSON_PRETTY_PRINT));

    header("Location: index.php");
    exit;
?>

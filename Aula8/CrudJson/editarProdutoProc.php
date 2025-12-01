<?php
$caminho = "produtos.txt";

$id = $_POST['id'];
$nome = $_POST['NomeProduto'];
$preco = $_POST['PrecoProduto'];
$categoria = $_POST['CategoriaProduto'];

$produtos = json_decode(file_get_contents($caminho), true);

foreach ($produtos as &$p) {
    if ($p['id'] == $id) {
        $p['Nome'] = $nome;
        $p['Preco'] = $preco;
        $p['Categoria'] = $categoria;
        break;
    }
}

file_put_contents($caminho, json_encode($produtos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: index.php");
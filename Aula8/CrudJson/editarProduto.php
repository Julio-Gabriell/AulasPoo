<?php
$caminho = "produtos.txt";
$id = $_GET['id'];

if (!file_exists($caminho) || filesize($caminho) == 0) {
    die("Arquivo vazio ou inexistente.");
}

$produtos = json_decode(file_get_contents($caminho), true);

$produto = null;
foreach ($produtos as $p) {
    if ($p['id'] == $id) {
        $produto = $p;
        break;
    }
}

if (!$produto) {
    die("Produto não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h2>Editar Produto</h2>

    <form action="editarProdutoProc.php" method="POST">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>">

        <label>Nome:</label>
        <input type="text" name="NomeProduto" value="<?= $produto['Nome'] ?>" required><br><br>

        <label>Preço:</label>
        <input type="number" step="0.01" name="PrecoProduto" value="<?= $produto['Preco'] ?>" required><br><br>

        <label>Categoria:</label>
        <input type="text" name="CategoriaProduto" value="<?= $produto['Categoria'] ?>" required><br><br>

        <button type="submit">Salvar alterações</button>
    </form>

    <a href="index.php">Voltar</a>
</body>
</html>
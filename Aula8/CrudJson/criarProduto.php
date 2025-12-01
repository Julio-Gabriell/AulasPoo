<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Produto</title>
</head>
<body>
    <form action="criarProdutoProc.php" method="post">
        <label for="NomeProduto">Nome do Produto:</label>
        <input type="text" name="NomeProduto" id="NomeProduto">

        <label for="PrecoProduto">Preço do Produto:</label>
        <input type="number" name="PrecoProduto" id="PrecoProduto">

        <label for="CategoriaProduto">Categoria do Produto:</label>
        <input type="text" name="CategoriaProduto" id="CategoriaProduto">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
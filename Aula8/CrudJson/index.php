<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>

        <?php
            $caminho = "produtos.txt";

            if (file_exists($caminho) && filesize($caminho) > 0) {
                $conteudo = file_get_contents($caminho);
                $produtos = json_decode($conteudo);

                if ($produtos) {
                    foreach ($produtos as $obj) {
                        echo "<p>Nome: {$obj->Nome}</p>";
                        echo "<p>Preço: {$obj->Preco}</p>";
                        echo "<p>Categoria: {$obj->Categoria}</p>";

                        echo "<a href='editarProduto.php?id={$obj->id}'>Editar produto</a> | ";
                        echo "<a href='deletarProduto.php?id={$obj->id}'>Deletar produto</a> <hr>";
                    }
                } else {
                    echo "<p>Nenhum produto encontrado.</p>";
                }
            } else {
                echo "<p>Arquivo vazio ou inexistente.</p>";
            }
?>

    <a href="criarProduto.php">Adicionar produto</a>
</body>
</html>
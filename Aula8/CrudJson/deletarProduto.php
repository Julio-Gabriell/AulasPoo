<?php 

    $caminho = "produtos.txt";
    $id = $_GET['id'];

    if (file_exists($caminho) && filesize($caminho) > 0) {
        $produtos = json_decode(file_get_contents($caminho), true);

        if (isset($produtos[$id])) {
            unset($produtos[$id]);
            $produtos = array_values($produtos);

            file_put_contents($caminho, json_encode($produtos, JSON_PRETTY_PRINT));
        }
    }

    header("Location: index.php");
    exit;

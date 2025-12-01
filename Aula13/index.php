<?php 

    require_once "Armario.php";
    require_once "Documento.php";
    require_once "Escritorio.php";
    require_once "Gaveta.php";
    require_once "Item.php";
    require_once "Objeto.php";
    require_once "Pasta.php";

    $documento1 = new Documento("Ata Demissao", "Documento explicatorio de uma reuinicao", "12/04/2012");
    $documento2 = new Documento("Ata Contratação", "Documento explicatorio de uma reuinicao", "23/12/2023");
    $documento3 = new Documento("Ata Metas", "Documento com metas a serem batidas", "05/03/2019");

    $pasta1 = new Pasta("Pasta de Demissoes", "Pasta de demissoes", "rh");
    $pasta2 = new Pasta("Pasta de Contrataçoes", "Pasta de contratacoes", "rh");

    $objeto1 = new Objeto("Regua", "Usado para medir", 0.8);
    $objeto2 = new Objeto("Grampos", "Usado em grampeadores", 0.2);

    $gaveta1 = new Gaveta([$documento1, $documento3]);
    $gaveta2 = new Gaveta([$pasta1, $objeto2]);
    $gaveta3 = new Gaveta([$pasta2, $documento2]);

    $armario1 = new Armario([$gaveta1, $gaveta2]);
    $armario2 = new Armario([$gaveta3]);

    $escritorio = new Escritorio([$armario1, $armario2]);

    echo $gaveta1->listarItens();
    $gaveta1->removerItem("Grampos");
    echo $gaveta1->listarItens();

    echo "<br>";

    echo $gaveta2->listarItens();

    echo "<br>";

    echo $gaveta3->listarItens();

    echo "<br>";

    $armario1->listarGaveta();

    echo "<br>";

    $armario2->listarGaveta();

    echo "<br>";

    $escritorio->listarArmario();

    echo "<br>";

    $escritorio->auditoria();

    echo "<br>";
?>
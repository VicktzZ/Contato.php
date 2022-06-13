<?php
    require 'Produto.class.php';
        
    $produto = new Produto();

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $descr = $_POST['descr'];
        $price = $_POST['price'];

    }

    $produto->addProd($nome, $descr, $price);

?>
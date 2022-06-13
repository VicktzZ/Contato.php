<?php
    require 'Produto.class.php';
        
    $produto = new Produto();

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descr = $_POST['descr'];
        $price = $_POST['price'];

    }

    $produto->altProd($id, $nome, $descr, $price);

?>
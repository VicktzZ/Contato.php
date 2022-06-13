<?php
    require 'Produto.class.php';
        
    $produto = new Produto();

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }

    $produto->delProd($id);

?>
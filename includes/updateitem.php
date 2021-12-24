<?php

    include "conexao_db.php";

    $iditem = $_GET['id'];
    $descricao = $_POST['descricao'];
    $diasdevolucao = $_POST['diasdevolucao'];

    $set = "descricao = '$descricao' , diasdevolucao = $diasdevolucao";
    $query = 'UPDATE ITENS SET ' . $set . ' WHERE ID = ' . $iditem;

    echo $query;

    if($result = mysqli_query($conn, $query))
    {   
        header('Location:  ../itens.php');
    } else {
        echo "Houve um erro inesperado";
    }
?>
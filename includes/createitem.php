<?php
    session_start();

    include "conexao_db.php";

    $descricao = $_POST['descricao'];
    $idusuario = $_SESSION['idusuario'];
    $status = "Disponível";
    $diasdevolucao = $_POST['diasdevolucao'];

    $values = "'$descricao' , $idusuario , '$status', $diasdevolucao";

    $query = 'INSERT INTO ITENS (descricao, idusuario, status, diasdevolucao) VALUES (' . $values . ')';

    echo $query;
    if($result = mysqli_query($conn, $query))
    {   
        header('Location:  ../itens.php');
    } else {
        echo "Erro Inesperado";
    }
?>
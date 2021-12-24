<?php

    include "conexao_db.php";

    $iditem = $_GET['id'];

    $query = "DELETE FROM ITENS WHERE ID = " . $iditem;

    $result = mysqli_query($conn, $query);

    while(!$result)
    {
        $result = mysqli_query($conn, $query);
    }

    header('Location: ../itens.php');
?>
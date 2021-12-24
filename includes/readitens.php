<?php

    $idusuario = $_SESSION['idusuario'];

    include "conexao_db.php";

    $query = "SELECT 
        i.id as id, 
        i.descricao as descricao,
        u.nome as usuario,
        i.status as status
        FROM ITENS i INNER JOIN USUARIOS u ON i.idusuario = u.id
        WHERE i.idusuario = " . $idusuario;

    $result = mysqli_query($conn, $query);
    
?>
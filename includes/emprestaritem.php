<?php
    session_start();
    include "conexao_db.php";

    $iditem = $_GET['id'];
    $idusuario = $_SESSION['idusuario'];
    $prazodevolucao = null;

    $queryitem = "SELECT * FROM ITENS WHERE id = " . $iditem;
    $resultitem = mysqli_query($conn, $queryitem);

    while($row = mysqli_fetch_array($resultitem, MYSQLI_ASSOC))
    {
        $prazodevolucao = $row['diasdevolucao'];
    }
    
    $query1 = "INSERT INTO EMPRESTIMOS (iditem, idemprestador, dataemprestimo, datadevolucao, status) 
        VALUES (". $iditem ." , " . $idusuario . " , CURRENT_DATE() , DATE_ADD(CURRENT_DATE(), INTERVAL " . $prazodevolucao ." DAY), 'Em dia')";

    $query2 = "UPDATE ITENS SET status = 'Emprestado' WHERE ID = " . $iditem;


    while(!$result1)
    {
        $result1 = mysqli_query($conn, $query1);
    }

    while(!$result2)
    {
        $result2 = mysqli_query($conn, $query2);
    }

    header('Location: ../itensdisponiveis.php');
?>
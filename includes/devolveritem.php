<?php

    $iditem = $_GET['id'];
    $status = null;

    include "conexao_db.php";

    $querystatus = "SELECT * FROM EMPRESTIMOS WHERE IDITEM = " . $iditem;

    $result = mysqli_query($conn, $querystatus);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $status = $row['status'];
    }

    if($status != null || $status != "Devolvido")
    {
        $query1 = "UPDATE EMPRESTIMOS SET STATUS = 'Devolvido' WHERE IDITEM = " . $iditem;
        $query2 = "UPDATE ITENS SET STATUS = 'Disponível' WHERE ID = " . $iditem;
    
        while(!$result1)
        {
            $result1 = mysqli_query($conn, $query1);
        }
    
        while(!$result2)
        {
            $result2 = mysqli_query($conn, $query2);
        }
    }

    header('Location: ../meusemprestimos.php');
?>
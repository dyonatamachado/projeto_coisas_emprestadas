<?php
    include "conexao_db.php";
    $idusuario = $_SESSION['idusuario'];

    $query = "SELECT id, DATEDIFF(CURRENT_DATE(), DATADEVOLUCAO) AS diasdif
        FROM EMPRESTIMOS WHERE IDEMPRESTADOR = " . $idusuario . " AND STATUS <> 'Devolvido' AND STATUS <> 'Atrasado'";
    
    $result = mysqli_query($conn, $query);

    $islate = false;

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $id = $row['id'];
        $diasdif = $row['diasdif'];
        $islate = true;

        if($diasdif > 0) 
        {
            $queryatraso = "UPDATE EMPRESTIMOS SET STATUS = 'Atrasado' WHERE ID = " . $id;
            $res = mysqli_query($conn, $queryatraso);

            while(!$res)
            {
                $res = mysqli_query($conn, $queryatraso); 
            }
        }
    }

    if($islate)
    {      
        header('Location: ../home.php?atraso=1');
    } else {
        header('Location: ../home.php');
    }
?>  
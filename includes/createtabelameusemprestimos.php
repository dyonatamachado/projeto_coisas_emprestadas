<?php
    $idusuario = $_SESSION['idusuario'];

    include "conexao_db.php";

    $query = "SELECT 
            I.DESCRICAO AS item, U.NOME AS dono, I.ID AS iditem,
            E.DATAEMPRESTIMO AS dataemprestimo,
            E.DATADEVOLUCAO AS datadevolucao, E.STATUS AS status
        FROM EMPRESTIMOS E
        INNER JOIN ITENS I ON I.ID = E.IDITEM
        INNER JOIN USUARIOS U ON U.ID = E.IDEMPRESTADOR
        WHERE E.IDEMPRESTADOR = " . $idusuario;

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) 
    {   
        $iditem = $row['iditem'];
        $item = $row['item'];
        $dono = $row['dono'];
        $dataemprestimo = $row['dataemprestimo'];
        $datadevolucao = $row['datadevolucao'];
        $status = $row['status'];

        $dataemp = date_create($dataemprestimo);
        $datadev = date_create($datadevolucao);

        $dif = date_diff($dataemp, $datadev);


        echo "<tr>";
        
        echo "<td>" . $item . "</td>";
        echo "<td>" . $dono . "</td>";
        echo "<td>" . $dataemprestimo . "</td>";
        echo "<td>" . $datadevolucao . "</td>";
        echo "<td>" . $status . "</td>";


        echo '<td><a href="includes/devolveritem.php?id=' . $iditem . '">Devolver</a></td>';
        
        echo "</tr>";
    }
?>
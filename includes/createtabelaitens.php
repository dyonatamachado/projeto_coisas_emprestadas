<?php

    include "readitens.php";

    while ($row = mysqli_fetch_array($result)) 
    {
        $id = $row['id'];
        $descricao = $row['descricao'];
        $status = $row['status'];

        echo "<tr>";
        
        echo "<td>" . $id . "</td>";
        echo "<td>" . $descricao . "</td>";
        echo "<td>" . $status . "</td>";

        echo '<td><a href="configuraritem.php?id=' . $id . '">Editar</a></td>';
        echo '<td><a href="includes/deleteitem.php?id=' . $id . '">Apagar</a></td>';
        
        echo "</tr>";
    }
?>
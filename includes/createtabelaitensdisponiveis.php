<?php

    include "readitensdisponiveis.php";

    while ($row = mysqli_fetch_array($result)) 
    {
        $id = $row['id'];
        $descricao = $row['descricao'];
        $dono = $row['dono'];
        $prazodevolucao = $row['prazodevolucao'];


        echo "<tr>";
        
        echo "<td>" . $id . "</td>";
        echo "<td>" . $descricao . "</td>";
        echo "<td>" . $dono . "</td>";
        echo "<td>" . $prazodevolucao . "</td>";


        echo '<td><a href="includes/emprestaritem.php?id=' . $id . '">Emprestar</a></td>';
        
        echo "</tr>";
    }
?>
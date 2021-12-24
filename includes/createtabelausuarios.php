<?php

    include "readusuarios.php";

    while ($row = mysqli_fetch_array($result)) 
    {
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $tipo = $row['tipo'];

        echo "<tr>";
        
        echo "<td>" . $id . "</td>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $email . "</td>";
        echo "<td>" . $tipo . "</td>";

        echo '<td><a href="configurarusuario.php?id=' . $id . '">Editar</a></td>';
        echo '<td><a href="includes/deleteusuario.php?id=' . $id . '">Apagar</a></td>';
        
        echo "</tr>";
    }
?>


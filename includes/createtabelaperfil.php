<?php
    $id = $_SESSION['idusuario'];

    include "conexao_db.php";

    $query = 'SELECT * FROM USUARIOS WHERE id = ' . $id;

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $tipo = $row['tipo'];
        $email = $row['email'];
        $nome = $row['nome'];
        
        echo "<tr>";

        echo "<td>" . $id . "</td>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $email . "</td>";
        echo "<td>" . $tipo . "</td>";

        echo '<td><a href="atualizardados.php?id=' . $id . '">Editar</a></td>';


        echo "</tr>";
    }
?>


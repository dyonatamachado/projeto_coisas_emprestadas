<?php
    session_start();

    include "conexao_db.php";

    $tiposession = $_SESSION['tipousuario'];

    $query = "SELECT m.texto as texto, m.link as link FROM MENU m 
        INNER JOIN MENUTIPO mt ON m.id = mt.idmenu 
        WHERE mt.tipo = '" . $tiposession . "' ORDER BY m.id";

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $texto = $row['texto'];
        $link = $row['link'];

        echo '<li class="itens-menu">';
        echo '<a href="';
        echo $link;
        echo '">';
        echo $texto;
        echo '</a></li>';
    }
?>
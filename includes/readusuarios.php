<?php
    include "conexao_db.php";

    $query = "SELECT * FROM USUARIOS";

    $result = mysqli_query($conn, $query);
?>
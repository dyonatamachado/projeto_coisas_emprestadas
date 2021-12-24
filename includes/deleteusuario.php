<?php

    include "conexao_db.php";

    $idusuario = $_GET['id'];

    if($idusuario != 1)
    {
        $query = "DELETE FROM USUARIOS WHERE ID = " . $idusuario;

        if($result = mysqli_query($conn, $query)){
            header('Location: ../usuarios.php');
        } else {
            echo "Houve um erro inesperado";
        }
    } else {
        echo "Houve um erro inesperado";
    }
?>
<?php

    include "conexao_db.php";

    $idusuario = $_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];

    $set = "nome = '$nome' , email = '$email', tipo = '$tipo'";
    $query = 'UPDATE USUARIOS SET ' . $set . ' WHERE ID = ' . $idusuario;

    if($result = mysqli_query($conn, $query))
    {   
        header('Location:  ../usuarios.php');
    } else {
        echo "Houve um erro inesperado";
    }
?>
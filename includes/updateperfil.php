<?php
    session_start();
    include "conexao_db.php";

    $idusuario = $_SESSION['idusuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];

    $set = "nome = '$nome' , email = '$email'";
    $query = 'UPDATE USUARIOS SET ' . $set . ' WHERE ID = ' . $idusuario;

    if($result = mysqli_query($conn, $query))
    {   
        header('Location:  ../perfil.php');
    } else {
        echo "Houve um erro inesperado";
    }
?>
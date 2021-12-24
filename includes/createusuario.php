<?php

    include "conexao_db.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $senha = "mudar123";

    $values = "'$nome' , '$email', '$senha','$tipo'";

    $query = 'INSERT INTO USUARIOS (nome, email, senha, tipo) VALUES (' . $values . ')';

    if($result = mysqli_query($conn, $query))
    {   
        header('Location:  ../usuarios.php');
    } else {
        echo "Erro Inesperado";
    }
?>

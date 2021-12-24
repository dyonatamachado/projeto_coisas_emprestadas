<?php
    session_start();
    $id = $_SESSION['idusuario'];


    $senhaatualdigitada = $_POST['senhaatual'];
    $novasenha = $_POST['novasenha'];
    $senhadb = null;
    
    include "conexao_db.php";

    $getsenha = 'SELECT * FROM USUARIOS WHERE ID = ' . $id;
    $query = 'UPDATE USUARIOS SET SENHA = ' . $novasenha . ' WHERE ID = ' . $id;

    $result = mysqli_query($conn, $getsenha);

    if($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $senhadb = $row['senha'];
    }

    if($senhadb == $senhaatualdigitada)
    {
        if($result = mysqli_query($conn, $query)){
            header('Location: ../perfil.php');
        } else {
            header('Location: ../alterarsenha.php?erro=1');
        }
    } else {
        header('Location: ../alterarsenha.php?erro=2');
    }
?>
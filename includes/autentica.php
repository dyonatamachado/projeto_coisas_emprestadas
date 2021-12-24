<?php
    include "conexao_db.php";
    
    $emaildigitado = $_POST['email'];
    $senhadigitada = $_POST['senha'];

    $query = 'SELECT * FROM USUARIOS WHERE email = "' . $emaildigitado . '"';

    $result = mysqli_query($conn, $query);

    if($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $senhabd = $row['senha'];
        $id = $row['id'];
        $tipo = $row['tipo'];

        if($senhabd != $senhadigitada){
            header('Location: ../login.php?erro=2');
        } else {
            session_start();
            $_SESSION['idusuario'] = $id;
            $_SESSION['tipousuario'] = $tipo;

            include "sincronizar.php";
        }
    } else {
        header('Location: ../login.php?erro=1');
    }
?>  
    


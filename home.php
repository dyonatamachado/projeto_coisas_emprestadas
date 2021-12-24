<?php
    if(!empty($_GET['atraso']))
    {
        $msg = "Existem itens em atraso, por favor efetue a devolução.";
        echo "<script>alert('" . $msg ."')</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coisas Emprestadas</title>
        <link rel="stylesheet" href="css/reset.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
        </style>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header>
            <nav>
                <?php include "includes/constroimenu.php";?>
            </nav>
        </header>
        <main>
            <h1>Bem-vindo, por favor selecione uma opção.</h1>
        </main>
    </body>
</html>
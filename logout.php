<?php
    session_start();

    session_unset();

    session_destroy();
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
        <div class="container-header">
            <p>Coisas Emprestadas - Logout</p>
        </div>
    </header>
    <main>
        <div class="container-logout">
            <h1 class="logout">Obrigado, até a próxima</h1>
            <div class="logout-voltar">
                <a href="login.php">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>
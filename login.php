<?php
    $mensagem = "";

    if(!empty($_GET['erro'])){
        if($_GET['erro'] == 1){
            $mensagem = "Não existe usuário cadastrado com o e-mail informado.";

            echo "<script>alert('" . $mensagem . "');</script>";
        } else {
            $mensagem = "Senha Incorreta";
            
            echo "<script>alert('" . $mensagem . "');</script>";
        }
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
        <div class="container-header">
            <p>Coisas Emprestadas - Login</p>
        </div>
    </header>
    <main>
        <div class="container-form">
            <form action="includes/autentica.php" method="post">
                <label for="email" class="labels-form">Digite seu E-mail</label><br>
                <input type="email" name="email" id="email" class="campos-form"><br><br>
    
                <label for="senha" class="labels-form">Digite sua Senha</label><br>
                <input type="password" name="senha" id="senha" class="campos-form"><br><br><br>

                <input type="submit" value="Entrar" class="botoes-form">
            </form>
        </div>
    </main>
</body>
</html>
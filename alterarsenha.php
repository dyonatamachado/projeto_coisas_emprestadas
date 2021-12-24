<?php
    $mensagem = "";

    if(!empty($_GET['erro'])){
        if($_GET['erro'] == 1){
            $mensagem = "Não foi possível completar a solicitação.";

            echo "<script>alert('" . $mensagem . "');</script>";
        } else {
            $mensagem = "Senha atual digitada está incorreta.";
            
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
        <nav>
            <?php include "includes/constroimenu.php";?>
        </nav>
    </header>
    <main>
        <div class="container-form">
            <h1>Alterar Senha</h1>
            <form action="includes/updatesenha.php" method="post">
                <label for="nome" class="labels-form">Digite a Senha Atual</label><br>
                <input type="password" name="senhaatual" id="senhaatual" class="campos-form" >"<br><br>
    
                <label for="email" class="labels-form">Digite a Nova Senha</label><br>
                <input type="password" name="novasenha" id="novasenha" class="campos-form"><br><br><br>
                
                <input type="submit" value="Alterar Senha" class="botoes-form">
            </form>
        </div>
    </main>
</body>
</html>
<?php
    $nome = "";
    $email = "";
    $tipo = "Padrão";
    
    $id = $_SESSION['idusuario'];

    include "includes/conexao_db.php";

    $query = "SELECT * FROM USUARIOS WHERE ID = " . $id;
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $nome = $row['nome'];
        $email = $row['email'];
        $tipo = $row['tipo'];
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
            <h1>Configurar Usuário</h1>
            <form action="includes/updateperfil.php" method="post">
                <label for="nome" class="labels-form">Nome do Usuário</label><br>
                <input type="text" name="nome" id="nome" class="campos-form" value="<?php echo $nome?>"><br><br>
    
                <label for="email" class="labels-form">E-mail do Usuário</label><br>
                <input type="email" name="email" id="email" class="campos-form" value="<?php echo $email?>"><br><br><br>
                

                <input type="submit" value="Confirmar" class="botoes-form">
            </form>
        </div>
    </main>
</body>
</html>
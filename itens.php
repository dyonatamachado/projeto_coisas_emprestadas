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
        
        <div class="container-links">
            <a href="configuraritem.php">Novo Item</a>
        </div>

        <div class="container-tabela">
            <table>
                <thead>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th colspan="2">Ações</th>
                </thead>
                <tbody>
                    <?php include "includes/createtabelaitens.php";?>
                </tbody>
            </table>
        </div>

        
    </main>
</body>
</html>
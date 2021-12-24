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
        
        <div class="container-tabela">
            <table>
                <thead>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Dono</th>
                    <th>Prazo para devolução (dias)</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php include "includes/createtabelaitensdisponiveis.php";?>
                </tbody>
            </table>
        </div>

        
    </main>
</body>
</html>
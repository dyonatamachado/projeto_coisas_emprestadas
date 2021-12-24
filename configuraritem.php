<?php
    $descricao = "";
    $diasdevolucao = 7;

    if(!empty($_GET["id"]))
    {
        $id = $_GET["id"];
        include "includes/conexao_db.php";

        $query = "SELECT * FROM ITENS WHERE ID = " . $id;
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $descricao = $row['descricao'];
            $diasdevolucao = $row['diasdevolucao'];
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
            <h1>Configurar Item</h1>
            <form
                <?php
                    if(!empty($_GET["id"])){
                        echo 'action="includes/updateitem.php?id=' . $id .'" method="POST"';
                    } else {
                        echo 'action="includes/createitem.php" method="POST"';
                    }
                ?>>
                <label for="descricao" class="labels-form">Descrição do Item</label><br>
                <input type="text" name="descricao" id="descricao" class="campos-form" value="<?php echo $descricao?>"><br><br>

                <label for="diasdevolucao" class="labels-form">Dias para Devolução</label><br>
                <input type="number" name="diasdevolucao" id="diasdevolucao" class="campos-form" min="1" max="30" value="<?php echo $diasdevolucao?>"><br><br>
                

                <input type="submit" value="Confirmar" class="botoes-form">
            </form>
        </div>
    </main>
</body>
</html>
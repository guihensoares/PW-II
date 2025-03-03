<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Precisa terminar -->
    <form action="exercicio8.php" method="get">
        <fieldset>
            <legend>Tabela de vendas</legend>
            <label for="nome">Insira seu nome</label>
            <input type="text" name="nome" id="nome">
            <label for="valorvendas">Insira o valor das vendas</label>
            <input type="number" name="valorvendas" id="valorvendas">
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php 

    if (isset($_GET['nome'])) {

        $nome = $_GET['nome'];

        if (isset($_GET['valorvendas'])) {

            $valorvendas = $_GET['valorvendas'];
            
        }
    }
    
    ?>
</body>
</html>
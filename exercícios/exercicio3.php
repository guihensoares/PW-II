<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checando números</title>
</head>
<body>
    <form action="exercicio3.php" method="get">
        <fieldset>
            <legend>Informe um número maior ou menor a 100</legend>
            <label for="numero">Digite o número</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php 
       
       if(isset($_GET['numero'])) {
        
        $numero = $_GET['numero'];

        if($numero > 100) {
            echo "O número $numero é maior que 100.";
        } else if ($numero < 100) {
            echo "O número $numero é menor que 100.";
        } else if ($numero == 100) {
            echo "O número $numero é extamente 100";
        } else {
            echo "Algo deu errado, tente por um NÚMERO novamente";
        }
       }
    
    ?>
</body>
</html>
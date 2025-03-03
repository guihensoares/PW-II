<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio6.php" method="get">
        <fieldset>
            <legend>Insira dois valores para saber o maior</legend>
            <label for="valor1">Digite o primeiro valor</label>
            <input type="number" name="valor1" id="valor1">
            <label for="valor2">Digite o segundo valor</label>
            <input type="number" name="valor2" id="valor2">
            <input type="submit" value="enviar">
        </fieldset>
    </form>

    <?php 

    if (isset($_GET['valor1'])) {
        $valor1 = $_GET['valor1'];

     if (isset($_GET['valor2'])) {
        $valor2 = $_GET['valor2'];

        if ($valor1 > $valor2) {
            echo "$valor1 é maior do que $valor2";
        } else if ($valor2 > $valor1) {
            echo "$valor2 é maior do que $valor1";
        } else if ($valor1 == $valor2) {
            echo "$valor1 e $valor2 tem valores iguais";
        } else {
            echo "Algo deu errado, tente novamente";
        }

     } 
    }
    
    ?>
</body>
</html>
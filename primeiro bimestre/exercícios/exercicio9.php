<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente de Valores</title>
</head>
<body>
<!-- Faça um programa que irá receber três valores inteiros, e exiba os valores em ordem crescente. -->
    <form action="exercicio9.php" method="get">
        <fieldset>
            <legend>Valores em Ordem Crescente</legend>
            <label for="valor1">Digite o primeiro valor</label>
            <input type="number" name="valor1" id="valor1" required>
            <label for="valor2">Digite o segundo valor</label>
            <input type="number" name="valor2" id="valor2" required>
            <label for="valor3">Digite o terceiro valor</label>
            <input type="number" name="valor3" id="valor3" required>
            <br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php 

    if (isset($_GET['valor1']) && isset($_GET['valor2']) && $_GET['valor3']) {

        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];
        $valor3 = $_GET['valor3'];

        if ($valor1 < $valor2 && $valor1 < $valor3) {
            if ($valor2 < $valor3) {
                echo "$valor1 <br>";
                echo "$valor2 <br>";
                echo "$valor3 <br>";
            } else {
                echo "$valor1 <br>";
                echo "$valor3 <br>";
                echo "$valor2 <br>";
            }
            
        } elseif ($valor2 < $valor1 && $valor2 < $valor3) {
            if ($valor1 < $valor3) {
                echo "$valor2 <br>";
                echo "$valor1 <br>";
                echo "$valor3 <br>";
            } else {
                echo "$valor2 <br>";
                echo "$valor3 <br>";
                echo "$valor1 <br>";
            }
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            if ($valor2 < $valor1) {
                echo "$valor3 <br>";
                echo "$valor2 <br>";
                echo "$valor1 <br>";
            } else {
                echo "$valor3 <br>";
                echo "$valor1 <br>";
                echo "$valor2 <br>";
            }
        }else {
        echo "Tente novamente com números diferentes!";
        }
    } 
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="exercicio12.php" method="get">
        <fieldset>
            <legend>Calculos com valores e operadores</legend>
            <label for="valor1">Insira o primeiro valor</label>
            <input type="number" name="valor1" id="valor1" required>
            <label for="operador">insira o operador</label>
            <input type="text" name="operador" id="operador" required>
            <label for="valor2">Insira o primeiro valor</label>
            <input type="number" name="valor2" id="valor2" required>
            <input type="submit" value="Calcular">
        </fieldset>
    </form>

    <?php 

    if (isset($_GET['valor1']) && isset($_GET['operador']) && isset($_GET['valor2'])) {

        $valor1 = $_GET['valor1'];
        $operador = $_GET['operador'];
        $valor2 = $_GET['valor2'];

        $soma = $valor1 + $valor2;
        $subtracao = $valor1 - $valor2;
        $multiplicacao = $valor1 * $valor2;
        $divisao = $valor1 / $valor2;

        if ($operador == "+" || $operador == "-" || $operador == "*" || $operador == "/") {

            if ($operador == "+") {

                echo "$valor1 + $valor2 = $soma";
            } elseif ($operador == "-") {

                echo "$valor1 - $valor2 =$subtracao";
            } elseif ($operador == "*") {

                echo "$valor1 * $valor2 =$multiplicacao";
            } elseif ($operador == "/") {

                echo "$valor1 / $valor2 =$divisao";
            } else {

                echo "Algo deu errado, tente novamente!";
            }

        } else {

            echo "Operador inválido, tente usar um válido!";
        }
    }


    ?>
</body>
</html>
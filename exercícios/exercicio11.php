<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lados do Triângulo</title>
</head>
<body>
    <form action="exercicio11.php" method="get">
        <fieldset>
            <legend>Lados de um triângulo</legend>
            <label for="lado1">Digite o primeiro lado</label>
            <input type="number" name="lado1" id="lado1">
            <label for="lado2">Digite o segundo lado</label>
            <input type="number" name="lado2" id="lado2">
            <label for="lado3">Digite o terceiro lado</label>
            <input type="number" name="lado3" id="lado3">
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php 

       if(isset($_GET['lado1'])) {

        $lado1 = $_GET['lado1'];

       } if (isset($_GET['lado2'])) {

        $lado2 = $_GET['lado2'];

       } if (isset($_GET['lado3'])) {

        $lado3 = $_GET['lado3'];

        if ($lado1 + $lado2 > $lado3 && $lado2 + $lado3 > $lado1 && $lado1 +$lado3 > $lado2) {
            
            if ($lado1 == $lado2 && $lado2 == $lado3) {

                echo "É um triângulo equilátero!";

            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {

                echo "É um triângulo isósceles!";

            } else {

                echo "É um triângulo escaleno!";
            }
        } else {

            echo "Os lados não formam um triângulo!";
        }

       }
    
    ?>
</body>
</html>
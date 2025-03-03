<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio4.php" method="get">
        <fieldset>
            <legend>Informe o nome de um mês</legend>
            <label for="mes">Digite o mês</label required>
            <input type="text" name="mes" id="mes">
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
      
      if(isset($_GET['mes'])) {
        
        $mes = $_GET['mes'];

        if ($mes == "Janeiro" || $mes == "Fevereiro" || $mes == "Março" || $mes == "Abril"  || $mes == "Maio" || $mes == "Junho") {
            echo "$mes é do primeiro semestre!";
        } else if ($mes == "Julho" || $mes == "Agosto" || $mes == "Setembro" || $mes == "Outubro"  || $mes == "Novembro" || $mes == "Dezembro") {
            echo "$mes é do segundo semestre!";
        } else {
            echo "Nome inválido, ou tente por com a primeira letra MAIUSCULA.";
        }
    }
    
    ?>
</body>
</html>
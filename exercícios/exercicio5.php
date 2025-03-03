<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio5.php" method="get">
        <fieldset>
            <legend>Insira uma letra</legend>
            <label for="letra">Escreva a letra</label>
            <input type="text" name="letra" id="letra">
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
      
      if(isset($_GET['letra'])) {
        
        $letra = $_GET['letra'];

        if ($letra == "A" || $letra == "E" || $letra == "I" || $letra == "O" || $letra == "U") {
            echo "$letra é uma vogal.";
        } else if ($letra == "B" || $letra == "C" || $letra == "D" || $letra == "F" || $letra == "G" || $letra == "H" || $letra == "J" || $letra == "K" || $letra == "L" || $letra == "M" || $letra == "N" || $letra == "P" || $letra == "Q" || $letra == "R" || $letra == "S" || $letra == "T" || $letra == "V" || $letra == "W" || $letra == "X" || $letra == "Y" || $letra == "Z") {
            echo "$letra é uma consoante.";
        } else {
            echo "Não é uma letra do alfabeto ou está em minusculo (tente em MAIUSCULO.)";
        } 
      }
    
    
    ?>
</body>
</html>
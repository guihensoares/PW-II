<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Notas</title>
</head>
<body>
   <form action="exercicio1.php" method="get">
      <fieldset>
         <legend>Informe a sua nota de 0 a 10</legend>
         <label for="nota">Sua nota</label>
         <input type="number" name="nota" id="nota">
         <input type="submit" value="Enviar">
      </fieldset>
   </form>

   <?php

   if (isset($_GET['nota'])) {

      $nota = $_GET['nota'];
   

     if($nota < 6) {
        echo "REPROVADO";
      } elseif ($nota == 6 || $nota == 7) {
        echo "RECUPERAÇÃO";
      } else {
       echo "APROVADO";
      }
   }
?>
</body>
</html>
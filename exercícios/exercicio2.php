<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior ou Menor de Idade</title>
</head>
<body>
    <form action="exercicio2.php" method="get">
        <fieldset>
            <legend>Informe a sua idade</legend>
            <label for="idade">Sua idade</label>
            <input type="number" name="idade" id="idade" required>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
       if (isset($_GET['idade'])) {
          $idade = $_GET['idade'];

          if($idade < 16) {
            echo "Você não pode votar!";
          } else if ($idade == 16 || $idade == 17 || $idade >= 70) {
            echo "você pode votar, mas não é obrigatório!";
          } else {
            echo "Você já pode votar, e a votação é obrigatória!";
          }
       }
    ?>
</body>
</html>
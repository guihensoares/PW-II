<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio2.php" method="get">
        <fieldset>
            <legend>Informe a sua idade</legend>
            <label for="idade">Sua idade</label>
            <input type="number" name="idade" id="idade" required>
            <input type="button" value="Enviar">
        </fieldset>
    </form>

    <?php
       if (isset($_GET['idade']) > 18) {
          echo "Pode votar!";
       }
       if (isset($_GET ['idade']) >= 60) {
          echo "Não é obrigado a votar";
       }
       if (isset(($_GET ['idade'])) == 16) {
          echo "Não é obrigado a votar";
       }
       if (isset(($_GET ['idade'])) == 17) {
          echo "Não é obrigado a votar";
       } 
       else {
          echo "Não pode votar!";
       }
    ?>
</body>
</html>
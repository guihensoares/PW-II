<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio7.php" method="get">
        <fieldset>
            <legend>Insira seu ano de nascimento</legend>
            <label for="ano">Insira o ano que você nasceu</label>
            <input type="number" name="ano" id="ano">
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php 

    if(isset($_GET['ano'])) {

        $ano = $_GET['ano'];

        if ($ano > 2007 && $ano <= 2025) {
            echo "Você é menor de idade";

        } else if ($ano < 2007 && $ano > 1909) {//ano que a pessoa mais velha do mundo nasceu
            echo "Você é maior de idade";
    
        } else if ($ano == 2007) {
            echo "Você será maior de idade esse ano (2025)";

        } else {
            echo "ERRO, COLOQUE UM ANO VÁLIDO.";
        }}
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus de Vendas</title>
</head>
<body>
    <form action="exercicio8.php" method="get">
        <fieldset>
            <legend>Tabela de vendas</legend>
            <label for="nome">Insira seu nome</label>
            <input type="text" name="nome" id="nome" required>
            <label for="valorvendas">Insira o valor das vendas</label>
            <input type="number" name="valorvendas" id="valorvendas" required>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php 

    if (isset($_GET['nome'])) {

        $nome = $_GET['nome'];

        if (isset($_GET['valorvendas'])) {

            $valorvendas = $_GET['valorvendas'];

            $bonus1 = ($valorvendas * 0.10) + $valorvendas;
            $bonus2 = ($valorvendas * 0.20) + $valorvendas;
            $bonus3 = ($valorvendas * 0.30) + $valorvendas;
            
            if ($valorvendas > 5000) {
                echo "Vendedor: $nome <br>"; 
                echo "###################### <br>"; 
                echo "Valor do bônus: 10% <br>"; 
                echo "###################### <br>"; 
                echo "Total a receber: $bonus1 R$ <br>";
            } else if ($valorvendas > 2000) {
                echo "Vendedor: $nome <br>"; 
                echo "###################### <br>"; 
                echo "Valor do bônus: 20% <br>"; 
                echo "###################### <br>"; 
                echo "Total a receber: $bonus2 R$ <br>";
            } else if ($valorvendas > 1000) {
                echo "Vendedor: $nome <br>"; 
                echo "###################### <br>"; 
                echo "Valor do bônus: 30% <br>"; 
                echo "###################### <br>"; 
                echo "Total a receber: $bonus1 R$<br>";
            } else {
                echo "Vendedor: $nome <br>"; 
                echo "###################### <br>"; 
                echo "Valor do bônus: Não há bônus <br>"; 
                echo "###################### <br>"; 
                echo "Total a receber: $valorvendas R$ <br>";
            }
        }
    }
    
    ?>
</body>
</html>
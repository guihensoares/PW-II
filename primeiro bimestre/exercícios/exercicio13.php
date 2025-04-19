<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovado ou Reprovado</title>
</head>
<body>
    <form action="exercicio13.php" method="get">
        <fieldset>
            <legend>Nome e notas do aluno</legend>
            <label for="nome">Digite seu nome</label>
            <input type="text" name="nome" id="nome" required>
            <label for="nota1">Digite sua nota de Português</label>
            <input type="number" name="nota1" id="nota1" required>
            <label for="nota2">Digite sua nota de Matemática</label>
            <input type="number" name="nota2" id="nota2" required>
            <br>

            <br>
            <label for="nota3">Digite sua nota de Inglês</label>
            <input type="number" name="nota3" id="nota3" required>
            <label for="nota4">Digite sua nota de Informática</label>
            <input type="number" name="nota4" id="nota4" required>
            <label for="frequencia">Digite a sua frequência total</label>
            <input type="number" name="frequencia" id="frequencia" required>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php 

    if (isset($_GET['nome']) && isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3']) && isset($_GET['nota4']) && isset($_GET['frequencia'])) {

        $nome = $_GET['nome'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $nota4 = $_GET['nota4'];
        $frequencia = $_GET['frequencia'];

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        if ($nota1 <= 10 && $nota2 <= 10 && $nota3 <= 10 && $nota4 <= 10 && $frequencia <= 100) {
           
            if ($media > 7 && $frequencia > 75) {

                echo "$nome você está APROVADO!";
            } else {

                echo "$nome você está REPROVADO!";
            }
        } else {

            echo "Nota ou Frequência inválidos!";
        }
    }

    ?>
</body>
</html>
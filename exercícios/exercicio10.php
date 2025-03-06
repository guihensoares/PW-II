<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com UserName e Senha</title>
</head>
<body>
    <form action="exercicio10.php" method="get">
        <fieldset>
            <legend>Login de usuário e senha</legend>
            <label for="usuario">Nome de Usuário</label>
            <input type="text" name="usuario" id="usuario">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php  

    if (isset($_GET['usuario'])) {

        $usuario = $_GET['usuario'];
    } if (isset($_GET['senha'])) {

        $senha = $_GET['senha'];
        $nomecorreto = "Admin";
        $senhacorreta = 123;

        if ($usuario == $nomecorreto && $senha == $senhacorreta) {

            echo "Conectado com sucesso!";
        } else {

            echo "Acesso Negado! Usuário ou senha incorretos!";
        }

        
    }

    ?>
</body>
</html>
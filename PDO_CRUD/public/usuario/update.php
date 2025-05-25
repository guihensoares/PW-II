<?php 

    include '../../config/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = isset($_GET['id']) ? $_GET['id'] : exit();

        if(empty($id)) {
            echo "O id é obrigatório!";
            exit();
        }

        $stmt = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $usuario = $stmt->fetchAll();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;

        if (empty($id)) {
            echo "ID é obrigatório!";
            exit();
        }

        if (empty($username)) {
            echo "Nome do usuario é obrigatório!";
            exit();
        }

        if (empty($password)) {
            echo "O campo da senha é obrigatório";
            exit();
        }

        $stmt = $pdo->prepare('UPDATE usuario SET username = :username, password = :password WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        header('Location: read.php');

    }

?>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario[0] ['id']; ?>">
        <label for="username">Editar nome do Usuario</label>
        <input type="text" name="username" id="username" value="<?php echo $usuario [0] ['username']; ?>">
        <br><br>
        <label for="password">Editar Senha</label>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit">Atualizar</button>
    </form>

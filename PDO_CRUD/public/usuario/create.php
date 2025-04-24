<?php 
    include '../../config/connection.php';
?>

<form action="create.php" method="post">
    <label for="username">Nome do Usuário</label>
    <input type="text" name="username" id="username">
    <br><br>
    <label for="password">Senha</label>
    <input type="password" name="password" id="password">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>

<?php 
    $username = isset($_POST['username']) ? $_POST['username'] : exit() ;
    $password = isset($_POST['password']) ? $_POST['password'] : exit() ;
    
    //statement
    $stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES (:username, :password)');
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

?>
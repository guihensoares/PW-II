<?php 

    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll();

?>

<?php

    foreach ($usuarios as $index => $user) {

?>

    <p><strong>Nome: </strong><?php echo $user['username'] ?></p>
    <a href="http://localhost/PW-II/PDO_CRUD/public/usuario/delete.php?id=<?php echo $user['id'];?>">Remover</a>
    <a href="http://localhost/PW-II/PDO_CRUD/public/usuario/update.php?id=<?php echo $user['id'];?>">Editar</a>
    <hr>
    
    <?php
    }    
    ?>
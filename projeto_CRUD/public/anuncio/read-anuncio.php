<?php 
    include '../../includes/header.php';
    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM anuncio');
    $anuncios = $stmt->fetchAll();

?>

<?php

    foreach ($anuncios as $index => $user) {

?>

    <p><strong>Nome: </strong><?php echo $user['titulo_anuncio'] ?></p>
    <a href="http://localhost/PW-II/projeto_CRUD/public/anuncio/delete-anuncio.php?id=<?php echo $user['id'];?>">Remover</a>
    <a href="#<?php echo $user['id'];?>">Editar</a>
    <hr>
    
    <?php
    }    
    ?>
    <?php include '../../includes/footer.php';?>
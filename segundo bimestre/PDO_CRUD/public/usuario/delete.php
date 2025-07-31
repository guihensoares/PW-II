<?php 

    include '../../config/connection.php';

?>

<?php

    $id = isset($_GET['id']) ? $_GET['id'] : exit();

    if (empty($id)) {
        echo "É necessario informar um id!";
        exit();
    }

    $stmt = $pdo->prepare("DELETE from usuario WHERE id= :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    header("Location: read.php");

?>
<?php 
    $host = 'localhost';
    $database = 'projeto';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    } catch(PDOException $erro) {
        die("Erro de conexão: " . $erro->getMessage());
    }
        
?>
<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=webuser_ijdb;charset=utf8', 'webuser', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'DELETE FROM `joke` WHERE `id` = :id';

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    header('location: jokes.php');
}catch(PDOException $e){
    $title = 'An error has occurred';
    $output = 'Database error.';
}

include __DIR__ . '/../templates/layout.html.php';
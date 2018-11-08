<?php
try{
	$pdo = new PDO('mysql:host=localhost;dbname=webuser_ijdb;charset=utf8', 'webuser', 'password');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = 'SELECT `id`, `joketext` FROM `joke`';
	$jokes = $pdo->query($sql);

    $title = 'Joke List';

    ob_start();
    include __DIR__ . '/../templates/jokes.html.php';
    $output = ob_get_clean();
}catch(PDOException $e){
    $title = 'An error has occurred';

	$output = 'Database error.';
}

include __DIR__ . '/../templates/layout.html.php';
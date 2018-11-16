<?php
$pdo = new PDO('mysql:host=localhost;dbname=webuser_ijdb;charset=utf8', 'webuser', 'password');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
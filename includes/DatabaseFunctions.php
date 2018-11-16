<?php
include_once __DIR__ . '/../includes/DatabaseConnection.php';

function query($pdo, $sql, $parameters = []) {
    $query = $pdo->prepare($sql);
    $query->execute($parameters);

    return $query;
}

function totalJokes($pdo) {
    $query = query($pdo, 'SELECT COUNT(*) FROM `joke`');
    $row = $query->fetch();

    return $row[0];
}

function getJoke($pdo, $id) {
    $query = $pdo->prepare('SELECT * FROM `joke` WHERE `id` = :id');
    $query->bindValue(':id', $id);
    $query->execute();

    return $query->fetch();
}

function insertJoke($pdo, $joketext, $authorId) {
    $query = 'INSERT INTO `joke` (`joketext`, `jokedate`, `authorId`) VALUES (:joketext, CURDATE(), :authorId)';
    $parameters = [':joketext' => $joketext, ':authorId' => $authorId];

    query($pdo, $query, $parameters);
}

function updateJoke($pdo, $jokeId, $joketext, $authorId) {
    $parameters = [':joketext' => $joketext,
    ':authorId' => $authorId, ':id' => $jokeId];
    query($pdo, 'UPDATE `joke` SET `authorId` = :authorId, `joketext` = :joketext WHERE `id` = :id', $parameters);
}

function deleteJoke($pdo, $id) {
    $parameters = [':id' => $id];

    query($pdo, 'DELETE FROM `joke` WHERE `id` = :id', $parameters);
}

function allJokes($pdo) {
    $jokes = query($pdo, 'SELECT j.`id`, `joketext`, a.`name` FROM `joke` j, `author` a WHERE j.`authorId` = a.`id`');

    return $jokes->fetchAll();
}
<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();


$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1,3, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
$preparedStatement->bindValue(1,8, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
$preparedStatement->bindValue(1,7, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
$preparedStatement->bindValue(1,6, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
$preparedStatement->bindValue(1,2, PDO::PARAM_INT);
var_dump($preparedStatement->execute());



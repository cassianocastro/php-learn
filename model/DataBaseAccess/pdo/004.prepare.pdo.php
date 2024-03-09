<?php

try
{
    $pdo = new PDO("mysql:host=localhost;dbname=t308", 'root', '');
}
catch ( PDOException $e )
{
    die('Connection Error: (' . $e->getMessage() . ')');
}

$params = [ ':id' => 1 ];

$statement = $pdo->prepare('SELECT * FROM alunos WHERE id = :id');
$statement->execute($params);
<?php

$mysqli = new mysqli('localhost','root','','t308');

if ($mysqli->connect_error) {
    die(
        'Connection Error ('
        . $mysqli->connect_errno . ') '
        . $mysqli->connect_error
    );
}

$query = $mysqli->prepare('SELECT * FROM alunos WHERE id = ? ');

$query->bind_param('i', 1);

$result = $query->execute();

?>

<?php

$mysqli = new mysqli('localhost', 'root', '', 't308');

if ( $mysqli->connect_error )
{
    die("Connect error({$mysqli->connect_errno}): {$mysqli->connect_error}");
}

echo "<h1>conectou com sucesso!</h1>";

$result = $mysqli->query('SELECT * FROM alunos');

if ( $result )
{
    echo "<p> Linhas retornadas: {$result->num_rows}";
    echo "<table>
    <tr>
    <td>ID</td>
    <td>NOME</td>
    </tr>";

    while ( $linha = $result->fetch_assoc() )
    {
        echo "<tr>
        <td>$linha[id]</td>
        <td>$linha[nome]</td>
        </tr>";
    }

    echo "</table>";
}

$result->data_seek(0);

if ( $result )
{
    echo "<hr><select name=\"select\">";

    while ( $linha = $result->fetch_assoc() )
    {
        echo "<option value=\"$linha[id]\">$linha[nome]</option> ";
    }

    echo "</select>";
}

$result->close();

$result = $mysqli->query('SHOW SESSION STATUS;', MYSQLI_USE_RESULT);

while ( $row = $result->fetch_assoc() )
{
    $array[$row['Variable_name']] = $row['Value'];
}

$result->close();

echo "<pre>";
print_r($array);
echo "</pre>";
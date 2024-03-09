<?php

// Verificar quais drivers estão habilitados
// var_dump(PDO::getAvailableDrivers());

try
{
    $pdo = new PDO("mysql:host=localhost;dbname=t308", 'root', '');
}
catch ( PDOException $e )
{
    die('Connection Error: (' . $e->getMessage() . ')');
}

$result = $pdo->query('SELECT * FROM alunos');

if ( $result ): ?>
    <p>Linhas retornadas: <?php $result->rowCount() ?></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php while ( $linha = $result->fetch(PDO::FETCH_ASSOC) ): ?>
                <tr>
                    <td><?= $linha["id"] ?></td>
                    <td><?= $linha["nome"] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php endif; ?>
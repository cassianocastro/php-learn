<?php require_once __DIR__ . '../controller/DBAcessController.php'; ?>

<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">
<head>
  <meta charset="utf-8">

  <title>Aprendendo PHP | Databases</title>
</head>
<body>
  <header>
    <h1>Conexões com Banco de Dados</h1>
  </header>

  <main>
    <article>
      <header>
        <h2>Teste Conexão</h2>
      </header>

      <section>
        <h3>Testando MySQLi</h3>

        <pre>
          <?= testMySQLi() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Testando PDO</h3>

        <pre>
          <?= testPDO() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Testando MySQLi #2</h3>

        <pre>
          <?= testMySQLi2() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Testando PDO #2</h3>

        <pre>
          <?= testPDO2() ?>
        </pre>
      </section>
    </article>
  </main>
</body>
</html>
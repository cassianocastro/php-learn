<?php require_once __DIR__ . '/../controller/DBAccessController.php'; ?>

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
    <div>

      <article>
        <header>
          <div>
            <h2>Teste Conexão</h2>
          </div>
        </header>

        <section>
          <div>
            <header>
              <div>
                <h3>Testando MySQLi</h3>
              </div>
            </header>

            <pre>
              <?= Controller\testMySQLi() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Testando PDO</h3>
              </div>
            </header>

            <pre>
              <?= Controller\testPDO() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Testando MySQLi #2</h3>
              </div>
            </header>

            <pre>
              <?= Controller\testMySQLi2() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Testando PDO #2</h3>
              </div>
            </header>

            <pre>
              <?= Controller\testPDO2() ?>
            </pre>
          </div>
        </section>
      </article>

    </div>
  </main>
</body>
</html>
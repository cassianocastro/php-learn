<?php require_once __DIR__ . '/../controller/AdvancedController.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">

  <title>Aprendendo PHP | Avançado</title>
</head>
<body>
  <header>
    <h1>PHP Avançado</h1>
  </header>

  <main>
    <div>

      <article>
        <header>
          <div>
            <h2>Header Article</h2>
          </div>
        </header>

        <section>
          <div>
            <header>
              <div>
                <h3>Type-Hinting</h3>
              </div>
            </header>

            <pre>
              <?= Controller\typeHinting() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Exceções</h3>
              </div>
            </header>

            <pre>
              <?= Controller\exceptions() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Funções Anônimas</h3>
              </div>
            </header>

            <pre>
              <?= Controller\anonymousFunctions() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Classes Anônimas</h3>
              </div>
            </header>

            <pre>
              <?= Controller\anonymousClasses() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Classes Abstratas</h3>
              </div>
            </header>

            <pre>
              <?= Controller\abstractClasses() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Interfaces</h3>
              </div>
            </header>

            <pre>
              <?= Controller\interfaces() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>HTML</h3>
              </div>
            </header>

            <pre>
              <?= Controller\html() ?>
            </pre>
          </div>
        </section>
      </article>

    </div>
  </main>
</body>
</html>
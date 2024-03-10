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
    <article>
      <header>
        <h2>Header Article</h2>
      </header>

      <section>
        <h3>Type-Hinting</h3>

        <pre>
          <?= typeHinting() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Exceções</h3>

        <pre>
          <?= exceptions() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Funções Anônimas</h3>

        <pre>
          <?= anonymousFunctions() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Classes Anônimas</h3>

        <pre>
          <?= anonymousClasses() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Classes Abstratas</h3>

        <pre>
          <?= abstractClasses() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Interfaces</h3>

        <pre>
          <?= interfaces() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>HTML</h3>

        <pre>
          <?= html() ?>
        </pre>
      </section>
    </article>
  </main>
</body>
</html>
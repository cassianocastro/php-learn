<?php require_once __DIR__ . '/../controller/ClassController.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">

  <title>Aprendendo PHP | Classes</title>
</head>
<body>
  <header>
    <h1>Classes</h1>
  </header>

  <main>
    <article>
      <header>
        <h2>Trabalhando com Classes em PHP</h2>
      </header>

      <section>
        <pre>
          <?= workWithClasses() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Criando Array de Objetos</h3>

        <pre>
          <?= createArrayOfObjects() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Encapsulamento</h3>

        <pre>
          <?= encapsulating() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Classes aninhadas</h3>

        <pre>
          <?= classesAninhadas() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Constructors e destructors</h3>

        <pre>
          <?= constructorsAndDestructors() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Herança: Reescrita de constructors e destructors</h3>

        <pre>
          <?= rewriteContructors() ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Herança Complexa: Controle de instâncias</h3>

        <pre>
          <?= instancesControl() ?>
        </pre>
      </section>
    </article>
  </main>
</body>
</html>
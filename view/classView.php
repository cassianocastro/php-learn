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
    <div>

      <article>
        <header>
          <div>
            <h2>Trabalhando com Classes em PHP</h2>
          </div>
        </header>

        <section>
          <div>
            <header>
              <div>
                <h2>Trabalhando com Classes em PHP</h2>
              </div>
            </header>

            <pre>
              <?= controller\workWithClasses() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Criando Array de Objetos</h3>
              </div>
            </header>

            <pre>
              <?= controller\createArrayOfObjects() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Encapsulamento</h3>
              </div>
            </header>

            <pre>
              <?= controller\encapsulating() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Classes aninhadas</h3>
              </div>
            </header>

            <pre>
              <?= controller\classesAninhadas() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Constructors e destructors</h3>
              </div>
            </header>

            <pre>
              <?= controller\constructorsAndDestructors() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Herança: Reescrita de constructors e destructors</h3>
              </div>
            </header>

            <pre>
              <?= controller\rewriteContructors() ?>
            </pre>
          </div>
        </section>

        <hr>

        <section>
          <div>
            <header>
              <div>
                <h3>Herança Complexa: Controle de instâncias</h3>
              </div>
            </header>

            <pre>
              <?= controller\instancesControl() ?>
            </pre>
          </div>
        </section>
      </article>

    </div>
  </main>
</body>
</html>
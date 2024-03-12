<?php require_once __DIR__ . '/../controller/VariablesController.php'; ?>

<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">
<head>
  <meta charset="utf-8">

  <title>Aprendendo PHP | Uso de Variáveis</title>
</head>
<body>
  <header>
    <h1>Variáveis</h1>
  </header>

  <main>
    <section>
      <div>
        <header>
          <div>
            <h2>Demonstração do Uso de Variáveis</h2>
          </div>
        </header>

        <pre>
          <?= demonstrateVars() ?>
        </pre>
      </div>
    </section>

    <hr>

    <section>
      <div>
        <header>
          <div>
            <h2>Demonstração do Uso de Funções</h2>
          </div>
        </header>

        <pre>
          <?= demonstrateFunctions() ?>
        </pre>
      </div>
    </section>
  </main>
</body>
</html>
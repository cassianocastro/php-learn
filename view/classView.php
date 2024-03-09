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
          <?php
          ini_set("display_errors", true);
          error_reporting(E_ALL);
          require_once '../model/POO/Classes/Classes.php';

          $pessoa = new Pessoa();
          $pessoa->idade = 18;
          echo "Objeto: Chamando método mostra:" . PHP_EOL;
          $pessoa->mostra();
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Criando Array de Objetos</h3>

        <pre>
          <?php
          print "Array de Objetos:<br>";

          $pessoas = array();
          $pessoas[0] = new Pessoa();
          $pessoas[0]->idade = 18;
          $pessoas[1] = new Pessoa();
          $pessoas[1]->idade = 22;
          $pessoas[2] = new Pessoa();

          $pessoas[0]->mostra();
          $pessoas[1]->mostra();
          $pessoas[2]->mostra();
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Encapsulamento</h3>

        <pre>
          <?php
          $objeto = new ClasseExemplo();

          echo <<<HTML
            Chamando setAtributo...
            {$objeto->setAtributo("Novo valor 2")}
            Chamando getAtributo: {$objeto->getAtributo()}
          HTML;
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Classes aninhadas</h3>

        <pre>
          <?php
          $cc = new Conta();
          $cc->setTitular("Ana");
          echo "<p>Titular: {$cc->getTitular()}</p>";
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Constructors e destructors</h3>

        <pre>
          <?php
          $objeto = new MinhaClasse("Borboleta");
          $objeto = null; // chama o destructor
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Herança: Reescrita de constructors e destructors</h3>

        <pre>
          <?php
          echo "<h4>Classe A</h4>";
          echo "Inicializando classe A: " . PHP_EOL;
          $objA = new ClasseA();
          echo "Chamando método mostraA(): " . PHP_EOL;
          $objA->mostraApublica();
          $objA = null;

          echo "<h4>Classe B</h4>";
          echo "Etapa1: Inicializando..." . PHP_EOL;
          $objB = new ClasseB();
          echo "Etapa2: Chamando..." . PHP_EOL;
          $objB->mostraB();
          echo "Etapa3: Destruindo..." . PHP_EOL;
          //$objB->mostraA();
          $objB = null;

          echo "<h4>Classe C</h4>";
          $objC = new ClasseC(); //Chama os construtores da ClasseC e ClasseA
          $objC->mostraApublica();
          $objC = null;

          echo "<h4>Classe D</h4>";
          $objD = new ClasseD(); //Chama os construtor/destructor da ClasseA
          $objD->mostraApublica();
          $objD = null;
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Herança Complexa: Controle de instâncias</h3>

        <pre>
          <?php
          $o1 = new ChildObject();
          $o2 = new ChildObject2();
          $x  = $o1->getInstanceGUID();
          $y  = $o2->getInstanceGUID();
          $instanceCount = SimpleObject::getInstanceCount();
          echo <<<HTML
            <table border="1">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>GUID</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{$o1->getInstanceId()}</td>
                  <td>{$o1->getInstanceGUID()}</td>
                </tr>
                <tr>
                  <td>{$o2->getInstanceId()}</td>
                  <td>{$o2->getInstanceGUID()}</td>
                </tr>
              </tbody>
            </table>
          SimpleObjects: $instanceCount\n\n
          HTML;

          print_r(SimpleObject::getInstance($x));
          print_r(SimpleObject::getInstance($y));
          print_r("\nNULL:", SimpleObject::getInstance(null));

          echo "\nAll Instances:" . PHP_EOL;
          print_r(SimpleObject::getAllInstances());
          ?>
        </pre>
      </section>
    </article>
  </main>
</body>
</html>
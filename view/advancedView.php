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
          <?php
          ini_set("display_errors", true);
          error_reporting(E_ALL);
          require_once '../model/Functions/functions.php';
          echo "<br>Teste Mixed:", PHP_EOL;
          teste(true);
          teste(false);

          teste("abc");
          teste("");

          teste(0);
          teste(1);

          teste(1);
          teste(0);

          teste("1");
          //teste("teste");
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Exceções</h3>

        <pre>
          <?php
          require_once '../model/POO/AbstractClass/absClasses.php';
          require_once '../model/POO/Interfaces/interfaces.php';
          require_once '../model/POO/ConcreteClass/concreteClasses.php';

          echo "<h4>Exceção Simples</h4>";
          try {
            $first  = inverse(5);
            $second = inverse(0);
            $third  = inverse(3);
          } catch (Exception $e) {
            echo "Exceção capturada: ", $e->getMessage(),
            "\nLinha: ", $e->getLine(), PHP_EOL;
          } finally {
            echo "Finally.\n";
          }

          echo "<h4>Exceção Customizada</h4>";
          $foo = new Test();
          $foo->testing();
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Funções Anônimas</h3>

        <pre>
          <?php
          print "<br>Resultados:<br>";
          $a = array(1, 5, 10, 23);
          $imploded = implode(", ", $a);

          echo
          "duplica($imploded): ",  operacao($a, $duplica),   PHP_EOL,
          "quadrado($imploded): ", operacao($a, "quadrado"), PHP_EOL,
          "triplica($imploded): ",
          operacao($a, function ($v) {
            return $v * 3;
          });
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Classes Anônimas</h3>

        <pre>
          <?php
          echo "<br>";
          $obj1 = new class()
          {

            public function __construct()
            {
              echo "Constructor da classe anônima #1!<br>";
            }

            public function print(): void
            {
              echo "Método da classe anônima #1!<br>";
            }
          };

          $obj1->print();

          function fazAlgo(object $c): void
          {
            $c->print();
            //echo get_class($c);
          }

          fazAlgo($obj1);

          fazAlgo(new class()
          {

            public function print(): void
            {
              echo "Método da classe anônima #2!<br>";
            }
          });
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Classes Abstratas</h3>

        <pre>
          <?php
          echo "<br>";
          $classe1 = new ClasseConcreta1();
          $classe1->imprimir();
          echo $classe1->valorComPrefixo('FOO1_'), PHP_EOL;

          $classe2 = new ClasseConcreta2();
          $classe2->imprimir();
          echo $classe2->valorComPrefixo('FOO2_'), PHP_EOL;

          operaClasseAbstrata($classe1);
          operaClasseAbstrata($classe2);
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3>Interfaces</h3>

        <pre>
          <?php
          $arquivo = "<section><h4>{titulo}</h4><p>Outra variavel: {nome}</p></section>";
          $t = new Template();
          $t->setVariable("titulo", "Titulo legal");
          $t->setVariable("nome", "Meu nome");
          echo $t->getHtml($arquivo);
          ?>
        </pre>
      </section>

      <hr>

      <section>
        <h3></h3>

        <pre>
          <?php
          $txt = new HTMLTextElement("teste");
          $h1  = new HTMLBinaryElement("h1", $txt);
          echo $h1->render();

          $x = new HTMLBinaryElement(
            "table",
            [
              new HTMLBinaryElement(
                "tr",
                [
                  new HTMLBinaryElement("td", new HTMLTextElement("coluna1")),
                  new HTMLBinaryElement("td", new HTMLTextElement("coluna2")),
                  new HTMLBinaryElement("td", new HTMLTextElement("coluna3"))
                ]
              ),
              new HTMLBinaryElement(
                "tr",
                [
                  new HTMLBinaryElement("td", new HTMLTextElement("coluna1")),
                  new HTMLBinaryElement("td", new HTMLTextElement("coluna2")),
                  new HTMLBinaryElement("td", new HTMLTextElement("coluna3"))
                ]
              )
            ]
          );

          echo $x->render();
          $p = new HTMLBinaryElement("p", new HTMLTextElement("Olá Mundo"));
          echo $p->render();
          ?>
        </pre>
      </section>
    </article>
  </main>
</body>
</html>
<?php
declare(strict_types=1);

namespace controller;

use Exception;

use model\POO\ConcreteClass\{
    ClasseConcreta1,
    ClasseConcreta2,
    HTMLBinaryElement,
    HTMLTextElement,
    Test,
    Template
};

use function model\Functions\{
    inverse,
    operacao,
    operaClasseAbstrata
};

/**
 * Section: Type-Hinting
 */
function typeHinting(): void
{
    ini_set("display_errors", true);
    error_reporting(E_ALL);

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
    // teste("teste");
}

/**
 * Section: Exceptions
 */
function exceptions(): void
{
    echo "<h4>Exceção Simples</h4>";

    try
    {
        $first  = inverse(5);
        $second = inverse(0);
        $third  = inverse(3);
    }
    catch ( Exception $e )
    {
        echo "Exceção capturada: {$e->getMessage()}\nLinha: {$e->getLine()}", PHP_EOL;
    }
    finally
    {
        echo "Finally.\n";
    }

    echo "<h4>Exceção Customizada</h4>";

    $foo = new Test();
    $foo->testing();
}

/**
 * Section: Funções Anônimas
 */
function anonymousFunctions(): void
{
    global $duplica;

    print "<br>Resultados:<br>";

    $a = [ 1, 5, 10, 23 ];
    $imploded = implode(", ", $a);

    echo
        "duplica($imploded): ",  operacao($a, $duplica),   PHP_EOL,
        "quadrado($imploded): ", operacao($a, "quadrado"), PHP_EOL,
        "triplica($imploded): ",
        operacao($a, fn ($v) => $v * 3);
}

/**
 * Section: Classes Anônimas
 */
function anonymousClasses(): void
{
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
        // echo get_class($c);
    }

    fazAlgo($obj1);

    fazAlgo(
        new class()
        {

            public function print(): void
            {
                echo "Método da classe anônima #2!<br>";
            }
        }
    );
}

/**
 * Section: Classes Abstratas
 */
function abstractClasses(): void
{
    echo "<br>";

    $classe1 = new ClasseConcreta1();
    $classe1->imprimir();

    echo $classe1->valorComPrefixo('FOO1_'), PHP_EOL;

    $classe2 = new ClasseConcreta2();
    $classe2->imprimir();

    echo $classe2->valorComPrefixo('FOO2_'), PHP_EOL;

    operaClasseAbstrata($classe1);
    operaClasseAbstrata($classe2);
}

/**
 * Section: Interfaces
 */
function interfaces(): void
{
    $arquivo = <<<HTML
        <section>
            <h4>{titulo}</h4>

            <p>
                Outra variavel: {nome}
            </p>
        </section>
    HTML;

    $t = new Template();
    $t->setVariable("titulo", "Titulo legal");
    $t->setVariable("nome", "Meu nome");

    echo $t->getHtml($arquivo);
}

/**
 * Section: HTML
 */
function html(): void
{
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
}
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
                <h2>Demonstração do Uso de Variáveis</h2>
                <pre>
                    <?php
                    ini_set("display_errors", true);
                    error_reporting(E_ALL);

                    $a = "5"; // string
                    echo "Valor de \$a: ", $a + 2 . PHP_EOL; // 7, integer

                    $b = $a + '5 carros.';
                    echo "Valor de \$b: ", $b . PHP_EOL;
                    // 10, integer  (conversão implícita)

                    $a = 1;
                    echo "Valor de \$a: ", ++$a . PHP_EOL;  // Incrementamos 1 e retornamos o valor
                    echo "Valor de \$a: ", $a++ . PHP_EOL;  // Retornamos, depois incrementamos 1
                    echo "Valor de \$a: ", --$a . PHP_EOL;  // Decrementamos 1 e retornamos o valor
                    echo "Valor de \$a: ", $a-- . PHP_EOL;  // Retornamos, depois decrementamos
                    $a = 4;
                    $a -= 2;     //  $a = $a - 2;
                    $a *= 2;     //  $a = $a * 2;
                    $a /= 2;     //  $a = $a / 2;
                    $a += 2;     //  $a = $a + 2;
                    echo "Valor de \$a: ", $a . PHP_EOL;
                    ?>
                </pre>
            </section>
            <hr>
            <section>
                <h2>Demonstração do Uso de Funções</h2>
                <pre>
                    <?php
                    require_once '../model/Functions/functions.php';
                    $x1 = 2;
                    $y1 = 3;
                    $z1 = calcular($x1, $y1);
                    //echo "<p> calcula (x1: $x1 )  (y1: $y1 ) (z1: $z1 )";
                    echo "<p>Passagem por valor: <br>",
                    "calcula: ( x: $x1 ) ( y: $y1 ) ( z: $z1 )</p>";
                    // resultado ( 2 ) ( 3 ) ( 7 )

                    $x2 = 2;
                    $y2 = 3;
                    $z2 = calcula_ref ($x2, $y2);
                    echo "<p>Passagem por referência: <br>",
                    "calcularef ( x: $x2 ) ( y: $y2 ) ( z: $z2 )</p>";
                    // resultado ( x: 4 ) ( y: 3 ) ( z: 7 )

                    $x3 = 2;
                    $z3 = calcula_def ($x3);
                    echo "<p>Parâmetro default: <br>",
                    "calcula_def ( x: $x3 ) ( z: $z3 )</p>";
                    // resultado ( x: 4 ) ( z: 9 )

                    $a = 10;
                    $b = 20;
                    $x = 2;
                    $y = 3;
                    $z = calcula_local ($x);
                    echo "<p>Escopo local: <br>",
                    "calcula_local ( a: $a ) ( b: $b ) ( x: $x ) ( z: $z )</p>";
                    // resultado ( 4 ) ( 3 ) ( 7 )

                    $a = 10;
                    $b = 20;
                    $x = 4;
                    $z = calcula_glolal ($x);
                    echo "<p>Escopo global: <br>",
                    "calcula_global ( a: $a ) ( b: $b ) ( x: $x ) ( z: $z )</p>";
                    // resultado ( 4 ) ( 3 ) ( 7 )

                    $x = 20; $y = 10;
                    $z = calcula_static ($x, $y);
                    echo "<p>Escopo estático: <br>",
                    "calcula_static #1 ( a: $a ) ( b: $b ) ( x: $x ) ( z: $z )</p>";

                    $z = calcula_static ($x, $y);
                    echo "<p>calcula_static #2 ( a: $a ) ( b: $b ) ( x: $x ) ( z: $z )</p>";

                    $z = calcula_static ($x, $y);
                    echo "<p>calcula_static #3 ( a: $a ) ( b: $b ) ( x: $x ) ( z: $z )</p>";
                    ?>
                </pre>
            </section>
        </main>
    </body>
</html>

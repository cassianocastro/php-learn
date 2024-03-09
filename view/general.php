<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">

  <title>Hello PHP</title>
</head>
<body>
  <pre>
        <?php
        echo "Hello PHP<br>";
        //phpinfo();
        //echo $_SERVER["HTTP_USER_AGENT"];

        #Mesclando blocos HTML e PHP
        if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") !== FALSE) :
        ?>
        <h3>strpos() must have returned non-false</h3>
        <p>"You are using IE.</p>
        <?php else : ?>
        <h3>strpos() must have returned false</h3>
        <p>"You are not using Internet Explorer.</p>
        <?php endif; ?>

        <!-- Tratando Formulários HTML-->
        <form action="./action.php" method="post">
            <label for="">Your Name:</label>
            <input type="text" name="name" value="">
            <br>
            <label for="">Your Age:</label>
            <input type="text" name="age" value="">
            <button type="submit" name="action" value="show">Submit</button>
        </form>

        <?php echo "Se você deseja rodar código PHP dentro de documentos XHTML
        ou XML, utilize essas tags" . PHP_EOL; ?>

        Você pode utilizar a tag curta <?= "imprima esta string" ?>.
        <br>
        É o equivalente de <?php echo "print this string"; ?>.
        <br>
        <?
        echo "Este código está entre tags curtas, mas somente funcionará" .
          "se short_open_tag estiver ativo\n";

        echo "Teste" . PHP_EOL;
        // Comentário estilo C
        /*
            Comentário estilo C
            */
        # Comentário estilo Shell
        $a_bool = true;
        $a_str  = "foo";
        $a_str2 = 'foo';
        $an_int = 12;

        echo gettype($a_bool) . "\n";
        echo gettype($a_str) . "\n";

        if (is_int($an_int)) :
          $an_int += 4;
          echo $an_int;
        endif;

        if (is_string($a_bool)) :
          echo "String: " . $a_bool;
        else :
          settype($a_bool, "string");
          echo "<br> a_bool: " . $a_bool . "<br>";
          echo var_dump($a_bool);
        endif;

        echo "\n" . 1_550.89;
        echo "\n" . PHP_INT_SIZE;
        echo "\n" . PHP_INT_MAX;
        echo "\n" . PHP_INT_MIN;

        var_dump(25 / 7);
        echo "<br>";
        //var_dump((integer) 25 / 7);
        var_dump(intval(25 / 7));
        echo "<br>";
        var_dump(round(25 / 7));

        $a = 1.23456789;
        $b = 1.23456780;
        $epsilon = 0.00001;

        if (abs($a - $b) < $epsilon) :
          echo "\nIguais";
        endif;

        $varTeste = "carros";
        echo "\n\nTestando retorno de $varTeste....\n\n";

        $strHeredoc = <<<EOD
            Exemplo de uma String
            distribuída em várias linhas
            utilizando a sintaxe heredoc.
            EOD;
        echo $strHeredoc;

        /*Exemplo mais complexo, utilizando classe*/
        /**
         *
         */
        class Foo
        {
          var $foo;
          var $bar;

          function foo()
          {
            $this->foo = "Foo";
            $this->bar = array('Bar1', 'Bar2', 'Bar3');
          }
        }

        $foo  = new Foo();
        $foo->foo();
        $name = "Cassiano";

        echo <<<EOT
            <br>Meu nome é "$name". Eu estou imprimindo $foo->foo.
            <br>Agora, eu estou imprimindo {$foo->bar[1]}.
            <br>Isto deve imprimir um 'A' maiúsculo: \x41.
            EOT;

        echo "\n\n";
        $juice = "apple";
        var_dump(PHP_EOL);
        echo "He drank some $juice juice." . PHP_EOL;
        echo "He drank some juice made of $juices.";
        echo "He drank some juice made of ${juice}s." . PHP_EOL;

        $str   = "This is a test.";
        $first = $str[0];
        echo $first;

        $third = $str[2];
        echo "<br>" . $third;

        $str = 'This is a still test';
        $last = $str[strlen($str) - 1];
        echo "<br>" . $last;

        $str = "Look at the sea";
        $str[strlen($str) - 1] = 'e';
        echo "<br><br>" . $str;
        ?>
        <br>
        <?php
        $array1 = array(
          "foo" => "bar",
          "bar" => "foo"
        );

        $array2 = [
          'foo' => 'bar',
          'bar' => 'foo'
        ];
        echo "<pre>";
        var_dump($array1);
        var_dump($array2);

        $arrayMulti = array(
          "foo"   => "bar",
          42      => 24,
          "multi" => array(
            "dimensional" => array(
              "array" => "foo",
            )
          )
        );
        var_dump($arrayMulti["foo"]);
        var_dump($arrayMulti[42]);
        var_dump($arrayMulti["multi"]["dimensional"]["array"]);
        echo "</pre>";
        ?>
        <br>
        <?php
        $array = array(
          5  => 1,
          12 => 2
        );
        $array[] = 56;
        //var_dump($array);
        echo "<pre>";
        print_r($array);
        echo "<br>";

        $array["x"] = 42;
        //var_dump($array);
        print_r($array);
        echo "<br>";

        unset($array[5]);
        //var_dump($array);
        print_r($array);
        echo "<br>";

        unset($array);
        var_dump($array);
        echo "</pre>";
        ?>
        <br>
        <?php
        echo "<pre>";
        #Criando um array normal
        $array = array(1, 2, 3, 4, 5);
        print_r($array);

        #Agora, apagando todos os itens, mas deixando o array intacto:
        foreach ($array as $i => $value) :
          unset($array[$i]);
        endforeach;
        print_r($array);

        #Acrescentando um item (note que a chave é 5, em vez de zero).
        $array[] = 6;
        print_r($array);

        #Reindexando:
        $array = array_values($array);
        $array[] = 7;

        print_r($array);
        echo "</pre>";
        ?>
        <br>
        <?php
        $array = array(
          1 => "Um",
          2 => "Dois",
          3 => "Três"
        );
        unset($array[2]);

        /*
                Irá produzir um array que pode ser definido como
                $array = array(
                    1 => 'um',
                    3 => 'tres'
                )
                e não
                $array = array(
                    1 => 'um',
                    2 => 'tres'
                )
            */
        $b = array_values($array);
        #Agora, $b é o array(1 => 'um', 2 => 'tres')
        ?>
        <?php
        error_reporting(E_ALL);
        ini_set("display_errors", true);
        ini_set("html_errors", false);

        #arrays simples:
        $array = array(1, 2);
        $count = count($array);

        echo "<pre>";
        for ($i = 0; $i < $count; $i++) :
          echo "\nVerificando $i:\n";

          echo "Ruim: " . $array['$i'] . "\n";
          echo "Bom: "  . $array[$i]   . "\n";

          echo "Ruim: {$array['$i']}\n";
          echo "Bom:  {$array[$i]}\n";
        endfor;
        echo "</pre>";
        ?>
        <br>
        <?php
        /**
         *
         */
        class Foodeu
        {

          function doFoo()
          {
            echo "Doing foo";
          }
        }
        $bar = new Foodeu();
        $bar->doFoo();
        ?>
        <br>
        <?php
        //Nossa Closure
        $double = function ($value) {
          return $value * 2;
        };

        //Esta é a série de números:
        $numbers = range(1, 5);

        /*
                O uso da Closure aqui para dobrar o valor
                de cada elemento de nossa série:
            */
        $newNumbers = array_map($double, $numbers);
        print implode(' ', $newNumbers);
        ?>
        <br>
        <?php
        error_reporting(E_ALL);
        ini_set("display_errors", true);
        ini_set("html_errors", false);

        function getItem(): ?string
        {
          if (isset($_GET["item"])) :
            return $_GET["item"];
          else :
            return null;
          endif;
        }
        print 23;

        #Retomar Documentação PHP em Escopo de Variáveis
        ?>
        <br>
        <?php
        $a = 1;
        $b = 2;

        function soma()
        {
          global $a, $b;
          $b += $a;
        }

        soma();
        echo $b . "<br>";

        function soma2()
        {
          $GLOBALS['b'] = $GLOBALS['b'] + $GLOBALS['a'];
        }
        soma2();
        echo $b;
        ?>
        <br>
        <?php
        function teste()
        {
          static $count = 0;
          $count++;
          echo $count . "<br>";

          if ($count < 10) {
            teste();
          }
          //$count--;
        }
        teste();
        ?>
        <br>
        <form action="" method="post">
            <fieldset>
                <legend>Um simples Formulário</legend>
                <label for="userName">Nome:</label>
                <input required id="userName" type="text" name="personal[name]" value=""><br>
                <label for="email">Email:</label>
                <input required id="email" type="text" name="personal[email]" value=""><br>
                <br>
                <label for="drink">Bebida preferida:</label>
                <select required multiple id="drink" name="drinks[]">
                    <optgroup label="Cervejas">
                        <option value="antartica">Antartica</option>
                        <option value="brahma">Brahma</option>
                        <option value="skol">Skol</option>
                    </optgroup>
                    <optgroup label="Sucos">
                        <option value="laranja">Laranja</option>
                        <option value="uva">Uva</option>
                        <option value="morango">Morango</option>
                    </optgroup>
                </select>
                <br>
                <input type="submit" name="" value="Submit">
            </fieldset>
        </form>
        <?php
        if ($_POST) :
          echo "<pre>";
          echo htmlspecialchars(
            print_r($_POST, true)
          );
          echo "</pre>";
        endif;
        ?>
        <br>
        <?php
        define('FOO', 'alguma coisa');
        define('FOO2', 'alguma outra coisa');
        define('FOO_BAR', 'alguma coisa a mais');

        echo FOO_BAR . "<br>";
        // foreach (get_defined_constants() as $constant) {
        //     echo $constant . "<br>";
        // }
        define('__ROOT__', dirname(__FILE__));
        define('DS', DIRECTORY_SEPARATOR);
        echo __ROOT__ . "<br>";
        echo DS . "<br>";
        echo __LINE__;
        #Retomar documentação PHP em Operadores...
        ?>
        <!-- <map>
            <style>
                area{
                    border: thin solid black;
                }
            </style>
            <area shape="circle" coords="200,250, 25" href="www.google.com.br" alt="">
            <area shape="default">
        </map> -->
        <details>
            <summary>Teste</summary>
            <a href="#">Testando...</a>
            <a href="#">Testando...</a>
        </details>
        <?php
        $a = 0;
        do {
          $a++;
        } while ($a <= 10);
        print $a;
        ?>
        <br>
        <?php
        $array = array(1, 2, 3, 4);
        foreach ($array as $value) {
          $value *= 2;
          echo $value . " - ";
        }
        unset($value);

        echo "<br><pre>";
        print_r($array);
        echo "</pre>";
        ?>
        <br>
        <?php
        $i = 0;
        while (++$i) :
          switch ($i):
            case 5:
              echo "At 5 <br>";
              break 1;
            case 10:
              echo "At 10; quitting <br>";
              break 2;
            default:
              break;
          endswitch;
          echo $i . "<br>";
        endwhile;
        ?>
        <br>
        <?php
        $age = 65;

        $result = match (true) {
          $age >= 65 => "senior",
          $age >= 25 => "adulto",
          $age >= 18 => "jovem adulto",
          default => "criança"
        };
        echo $result;
        ?>
        <br>
        <?php
        //setlocale(LC_ALL, "");
        // declare(ticks=3);
        //
        // #A function called on each tick event:
        // function tickHandler()
        // {
        //     echo "tickHandler() called<br>";
        // }
        //
        // register_tick_function("tickHandler");
        //
        // $a = 1;
        // if ($a > 0):
        //     $a += 2;
        //     print($a);
        // endif;

        $wage = 1432897.59;
        if (is_float($wage)) :
          print "É float<br>";
        endif;
        echo "R$ " . number_format($wage, 2, ",", ".");
        //echo phpinfo();

        /*$locale_info = localeconv();

            echo "<pre>\n";
            echo "--------------------------------------------\n";
            echo "  Monetary information for current locale:  \n";
            echo "--------------------------------------------\n\n";

            echo "int_curr_symbol:   {$locale_info["int_curr_symbol"]}\n";
            echo "currency_symbol:   {$locale_info["currency_symbol"]}\n";
            echo "mon_decimal_point: {$locale_info["mon_decimal_point"]}\n";
            echo "mon_thousands_sep: {$locale_info["mon_thousands_sep"]}\n";
            echo "positive_sign:     {$locale_info["positive_sign"]}\n";
            echo "negative_sign:     {$locale_info["negative_sign"]}\n";
            echo "int_frac_digits:   {$locale_info["int_frac_digits"]}\n";
            echo "frac_digits:       {$locale_info["frac_digits"]}\n";
            echo "p_cs_precedes:     {$locale_info["p_cs_precedes"]}\n";
            echo "p_sep_by_space:    {$locale_info["p_sep_by_space"]}\n";
            echo "n_cs_precedes:     {$locale_info["n_cs_precedes"]}\n";
            echo "n_sep_by_space:    {$locale_info["n_sep_by_space"]}\n";
            echo "p_sign_posn:       {$locale_info["p_sign_posn"]}\n";
            echo "n_sign_posn:       {$locale_info["n_sign_posn"]}\n";
            echo "</pre>\n";*/
        ?>

        <!-- Retomar em Funções PHP-->
        <?php
        echo "<pre>";
        $makefoo = true;
        /*
                Nós não podemos chamar foo() porque
                ela ainda não existe, mas nós podemos
                chamar bar()...
            */
        bar();

        if ($makefoo) {
          function foo()
          {
            echo "Eu não existo até que o programa passe por aqui.\n";
          }
        }

        /*
                Agora, nós podemos chamar foo(),
                porque $makefoo foi avaliado como true...
            */
        if ($makefoo) foo();

        function bar()
        {
          echo "Eu existo imediatamente desde o programa começar...\n";
        }

        function recursion($value = '')
        {
          if ($value <= 20) :
            echo "$value - ";
            recursion($value + 1);
          endif;
        }
        recursion(0);
        print "\n\n";

        function sum(...$numbers)
        {
          $acc = 0;
          foreach ($numbers as $n) {
            $acc += $n;
          }
          return $acc;
        }
        print "Resultado = " . sum(1, 2, 3, 4) . "\n";


        function add($a, $b)
        {
          return $a + $b;
        }
        echo add(...[1, 2]) . "\n";

        $a = [4, 4];
        echo add(...$a) . "\n";

        echo "Extensões compiladas:\n";
        $array = get_loaded_extensions();
        foreach ($array as $a) {
          print $a . "\n";
        }
        echo "</pre>";
        ?>
        <br>
        <?php
        /**
         *
         */
        class SimpleClass
        {

          public $var;

          function __construct()
          {
            $this->var = "Um valor padrão\n";
          }

          public function displayVar()
          {
            echo $this->var;
          }
        }

        /**
         *
         */
        class ExtendClass extends SimpleClass
        {

          function __construct()
          {
            parent::__construct();
          }

          public function displayVar()
          {
            echo "Classe Herdeira\n";
            parent::displayVar();
          }
        }
        echo "<pre>";
        $myObject = new SimpleClass();
        $myObject->displayVar();
        echo get_class($myObject) . PHP_EOL;

        $extendObject = new ExtendClass();
        $extendObject->displayVar();
        echo $extendObject::class . PHP_EOL;


        /**
         *
         */
        class Point
        {
          protected int $x;
          protected int $y;

          function __construct(int $x, int $y = 0)
          {
            $this->x = $x;
            $this->y = $y;
          }

          public function show()
          {
            echo
            "x = " . $this->x . PHP_EOL .
              "y = " . $this->y . PHP_EOL;
          }
        }

        $p1 = new Point(4, 5);
        $p1->show();

        $p2 = new Point(4);
        $p2->show();

        $p3 = new Point(y: 5, x: 4);
        $p3->show();


        /**
         *
         */
        class ClassName
        {
          const CONSTANT_VALUE = "Um valor constante\n";
          function __construct()
          {
          }
        }
        echo ClassName::CONSTANT_VALUE;


        class OtherClass extends ClassName
        {
          public static $myStatic = "Uma variável estática";

          public static function doubleColon()
          {
            echo parent::CONSTANT_VALUE;
            echo self::$myStatic . PHP_EOL;
          }
        }

        echo OtherClass::doubleColon();


        interface iTemplate
        {
          public function setVariable($name, $var);

          public function getHTML($template);
        }

        class Template implements iTemplate
        {
          private $vars;

          function __construct()
          {
            $this->vars = array();
          }

          public function setVariable($name, $var)
          {
            $this->vars[$name] = $var;
          }

          public function getHTML($template)
          {
            foreach ($this->vars as $name => $value) {
              $template = str_replace("{" . $name . "}", $value, $template);
            }

            return $template;
          }
        } #Retomar em classes anonimas;
        echo "</pre>";
        ?>
        </pre>
</body>
</html>
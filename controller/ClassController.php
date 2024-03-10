<?php

// Section: Trabalhando com Classes em PHP

ini_set("display_errors", true);
error_reporting(E_ALL);
require_once '../model/POO/Classes/Classes.php';

$pessoa = new Pessoa();
$pessoa->idade = 18;
echo "Objeto: Chamando método mostra:" . PHP_EOL;
$pessoa->mostra();
?>

<?php

// Section: Criando Array de Objetos

print "Array de Objetos:<br>";

$pessoas = [];
$pessoas[0] = new Pessoa();
$pessoas[0]->idade = 18;
$pessoas[1] = new Pessoa();
$pessoas[1]->idade = 22;
$pessoas[2] = new Pessoa();

$pessoas[0]->mostra();
$pessoas[1]->mostra();
$pessoas[2]->mostra();
?>

<?php

// Section: Encapsulamento

$objeto = new ClasseExemplo();

echo <<<HTML
    Chamando setAtributo...
    {$objeto->setAtributo("Novo valor 2")}
    Chamando getAtributo: {$objeto->getAtributo()}
HTML;
?>

<?php

// Section: Classes aninhadas

$cc = new Conta();
$cc->setTitular("Ana");

echo "<p>Titular: {$cc->getTitular()}</p>";
?>

<?php

// Section: Constructors e destructors

$objeto = new MinhaClasse("Borboleta");
$objeto = null; // chama o destructor
?>

<?php

// Section: Herança: Reescrita de constructors e destructors

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

<?php

// Section: Herança Complexa: Controle de instâncias

$o1 = new ChildObject();
$o2 = new ChildObject2();
$x  = $o1->getInstanceGUID();
$y  = $o2->getInstanceGUID();
$instanceCount = SimpleObject::getInstanceCount();
echo <<<HTML
<table>
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
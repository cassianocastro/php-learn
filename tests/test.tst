<?php
declare(strict_types=1);

/**
 *
 */
class Student
{

    const FOO = "";
    private array $data;

    public function __set(string $name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name): mixed
    {
        return $this->data[$name];
    }
}

/**
 *
 */
final class Foo
{

    public $function;

    public function __construct()
    {
        $this->function = function ()
        {
            echo "bar";
        };
    }

    public function bar()
    {
        return $this->function;
    }
}

/**
 *
 */
class A
{

    const C = 'constA';

    public function m()
    {
        echo static::C;
    }
}

/**
 *
 */
class B extends A
{
    const C = 'constB';
}

/**
 *
 */
class Bar
{

    private $foo;
    private $bar;
    private $baz;

    public function __construct()
    {
        $this->foo = "foo";
        $this->bar = "bar";
        $this->baz = "baz";
    }

    public function bar(): iterable
    {
        foreach ( $this as $key => $value )
        {
            yield "$key => $value<br>";
        }
    }

    public function foo(): void
    {
        $this->bar();
    }
}

echo "<pre>";

$getPDO = fn (
    string $dsn,
    string $user,
    string $password
) => new PDO(
    $dsn,
    $user,
    $password,
    [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
    ]
);

$pdo = $getPDO(
    "mysql:host=localhost;port=3306;dbname=t308;charset=utf8",
    "root",
    ""
);

$getAlunoByID = function (int $id) use ($pdo)
{
    try
    {
        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = ?");
        $stmt->bindValue(1, $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchObject(Student::class);
    }
    catch ( PDOException $e )
    {
        die($e->getMessage());
    }
};

$stu = $getAlunoByID(2);
echo $stu->id;

$getAlunosByIDs = function (int ...$ids) use ($pdo): iterable
{
    try
    {
        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id IN(?, ?, ?)");

        for ( $i = 0, $size = count($ids); $i < $size; ++$i )
        {
            $stmt->bindValue($i + 1, $ids[$i], PDO::PARAM_INT);
        }

        $stmt->execute();

        yield from $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch ( PDOException $e )
    {
        die($e->getMessage());
    }
};

$alunos = $getAlunosByIDs(2, 4, 5);

foreach ( $alunos as $aluno )
{
    printf(
        "ID: %s\nNome: %s\nIdade: %d\n\n",
        $aluno["id"],
        $aluno["nome"],
        $aluno["idade"]
    );
}

(
    (new Foo())->bar()
)();

$b = new B();
$b->m();

echo "<br>";
$bar = new Bar();
$props = $bar->bar();
echo "\\n<br>";

foreach ( $props as $value )
{
    print "$value<br>";
}

// Funções auto-executáveis: OK

(function () {
    echo "Hello";
})();
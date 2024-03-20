<?php
require_once __DIR__ . '/vendor/autoload.php';

use Model\Attributes\ExampleA\CopyFile;
use Model\Attributes\ExampleB\AnotherThing;

/**
 * @test
 */
function testA(): void
{
    $dir  = "./php/Attributes/ExampleA";
    $file = "test.html";

    if ( file_exists($dir . "/" . $file) )
    {
        shell_exec("rm $dir/$file");
    }

    (new Tests\ATest())->canExecuteAction(new CopyFile($file, $dir));
}

/**
 * @test
 */
function testB(): void
{
    (new Tests\BTest())->canDumpAttrData(new ReflectionClass(AnotherThing::class));
}

/**
 * @test
 */
function canAJAX(): void
{
    function getInput(): array
    {
        $input = file_get_contents("php://input");
        $data  = json_decode($input, true);

        return $data;
    }

    $r1 = [
        "status"  => 200,
        "message" => "Sucesso",
        "data"    => [
            "name"  => $_POST["name"],
            "phone" => $_POST["phone"]
        ]
    ];

    $r2 = [
        'statusCode' => 200,
        'result' => getInput()
    ];

    $r3 = [
        'name'  => "Cassiano",
        'phone' => "(51) 9 9359-6778"
    ];

    print json_encode($r3);
}

/**
 * @test
 */
function canCreatePhar(): mixed
{
    $context = stream_context_create(
        [
            "phar" => [
                [ "compress" => Phar::GZ ],
                [ "metadata" => ["user" => "cellog"] ]
            ]
        ]
    );

    file_put_contents("phar://./test.txt", "This is a test", 0, $context);
}

/**
 * @test
 */
function canReadFile(): void
{
    function getLines($file): Generator
    {
        $stream = fopen($file, "r");

        try
        {
            while ( $line = fgets($stream) )
            {
                yield $line;
            }
        }
        finally
        {
            fclose($stream);
        }
    }

    $lines = "";

    foreach ( getLines("index.php") as $n => $line )
    {
        if ( $n == 1 )
        {
            var_dump($n, $line);
        }

        $lines .= $line;
    }

    print $lines;
}

/**
 *
 */
function index(): void
{
    ini_set("display_errors", true);
    ini_set("display_startup_errors", true);

    error_reporting(E_ALL);

    setlocale(LC_ALL, "");

    print PHP_SAPI;

    phpinfo();
}

echo (new Tests\TwigTest())->__toString();
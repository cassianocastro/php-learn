<?php
declare(strict_types=1);

namespace model\Functions;

use Exception;
use Model\POO\AbstractClass\ClasseAbstrata;

/**
 * Passagem de parametros por valor
 */
function calcular($a, $b)
{
    $a *= 2;

    return $a + $b;
}

/**
 * Passagem de parametros por referencia
 */
function calcula_ref(&$a, $b)
{
    $a *= 2;

    return $a + $b;
}

/**
 * Passagem de parametros default
 */
function calcula_def(&$a, $b = 5)
{
    $a *= 2;

    return $a + $b;
}

/**
 *
 */
function calcula_local(&$a, $b = 5)
{
    return ($a * 2) + $b;
}

/**
 *
 */
function calcula_global()
{
    global $a, $b;

    $a *= 2;

    return $a + $b;
}

/**
 *
 */
function calcula_static($a, $b)
{
    static $cont = 1;

    $a *= $cont++;

    return $a + $b;
}

/**
 *
 */
function teste(mixed $param)
{
    var_dump($param);
}

/**
 *
 */
function inverse(int | float $x): int | float
{
    if ( $x === 0 )
    {
        throw new Exception('Divisão por zero.');
    }

    return 1 / $x;
}

/**
 * Cria uma função que recebe um array e uma fórmula que servirá
 * para calcular os dados do array
 */
function operacao(array $dados, callable | string $formula)
{
    $t = array_map($formula, $dados);

    return implode(", ", $t);
}

/**
 *
 */
function quadrado($v)
{
    return $v ** 2;
}

/**
 *
 */
function operaClasseAbstrata(ClasseAbstrata $c)
{
    echo "operaClasseAbstrata: ", get_class($c), PHP_EOL;
}
<?php
declare(strict_types=1);

namespace Model\POO\Classes;

/**
 *
 */
class MinhaClasse
{

    private $atributo;

    function __construct(string $nome)
    {
        $this->atributo = $nome;
        echo "Construtor MinhaClasse: {$this->atributo}", PHP_EOL;
    }

    function __destruct()
    {
        echo "Destruindo MinhaClasse: {$this->atributo}", PHP_EOL;
    }
}
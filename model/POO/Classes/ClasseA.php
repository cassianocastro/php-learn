<?php
declare(strict_types=1);

namespace Model\POO\Classes;

/**
 *
 */
class ClasseA
{

    protected $atributoA;

    function __construct()
    {
        echo "Constructor da Classe A", PHP_EOL;
        $this->atributoA = "A";
    }

    function __destruct()
    {
        echo "Destructor da Classe A", PHP_EOL;
    }

    public function mostraApublica()
    {
        echo "Classe A - mostraA publica - atributoA: {$this->atributoA}", PHP_EOL;
    }

    protected function mostraAprotegida()
    {
        echo "Classe A - mostraA protegida - atributoA: {$this->atributoA}", PHP_EOL;
    }
}
<?php
declare(strict_types=1);

namespace model\POO\Classes;

/**
 *
 */
class ClasseB extends ClasseA
{

    private $atributoB;

    function __construct()
    {
        echo "Chamando o constructor da classe pai (forçado)", PHP_EOL;

        parent::__construct();

        echo "Constructor da Classe B", PHP_EOL;

        $this->atributoB = "B";
    }

    function __destruct()
    {
        echo "Destructor da Classe B", PHP_EOL;

        echo "Chamando o destructor da classe pai (forçado)", PHP_EOL;

        parent::__destruct();
    }

    public function mostraB(): void
    {
        echo "Classe B - Chamando mostraAprotegida", PHP_EOL;

        $this->mostraAprotegida();

        echo "Classe B - mostraB - atributoB: {$this->atributoB}", PHP_EOL;
    }
}
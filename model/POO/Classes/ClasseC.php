<?php
declare(strict_types=1);

namespace model\POO\Classes;

/**
 *
 */
class ClasseC extends ClasseA
{

    private $atributoC;

    function __construct()
    {
        echo "Escondendo o constructor da classe pai", PHP_EOL;

        // parent::__construct(); // Chama o construtor da Superclasse

        echo "Constructor da Classe C", PHP_EOL;

        $this->atributoC = "Y";
    }

    // como não reescreveu destructor assume da pai
}
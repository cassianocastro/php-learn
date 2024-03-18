<?php
declare(strict_types=1);

namespace Model\POO\Classes;

/**
 *
 */
class Pessoa
{

    /**
     * Atributos da classe
     */
    var $idade = 20;

    /**
     * Métodos da classe
     */
    public function mostra(): void
    {
        echo __METHOD__, PHP_EOL, "Idade da pessoa: {$this->idade}", PHP_EOL;
    }
}
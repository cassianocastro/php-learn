<?php
declare(strict_types=1);

namespace Model\POO\ConcreteClass;

use Model\POO\AbstractClass\ClasseAbstrata;

/**
 *
 */
class ClasseConcreta1 extends ClasseAbstrata
{

    protected function pegarValor(): string
    {
        return "ClasseConcreta1<br>";
    }

    public function valorComPrefixo($prefixo): string
    {
        return "{$prefixo}ClasseConcreta1<br>";
    }
}
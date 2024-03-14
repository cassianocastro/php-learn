<?php
declare(strict_types=1);

namespace model\POO\ConcreteClass;

use model\POO\AbstractClass\ClasseAbstrata;

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
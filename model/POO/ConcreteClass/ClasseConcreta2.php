<?php
declare(strict_types=1);

namespace model\POO\ConcreteClass;

use model\POO\AbstractClass\ClasseAbstrata;

/**
 *
 */
class ClasseConcreta2 extends ClasseAbstrata
{

    protected function pegarValor(): string
    {
        return "ClasseConcreta2<br>";
    }

    public function valorComPrefixo($prefixo): string
    {
        return "{$prefixo}ClasseConcreta2<br>";
    }
}
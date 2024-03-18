<?php
declare(strict_types=1);

namespace Model\POO\AbstractClass;

/**
 *
 */
abstract class ClasseAbstrata
{

    /**
     * Força a classe que estender ClasseAbstrata a definir esses métodos
     */
    abstract protected function pegarValor(): string;

    abstract protected function valorComPrefixo($prefixo): string;

    /**
     * Método comum que pode ser implementado
     */
    public function imprimir(): void
    {
        print $this->pegarValor();
    }
}
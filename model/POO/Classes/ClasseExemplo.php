<?php
declare(strict_types=1);

namespace Model\POO\Classes;

/**
 *
 */
class ClasseExemplo
{

    private $atributo;

    public function setAtributo($valor): void
    {
        $this->atributo = $valor;
    }

    public function getAtributo()
    {
        return $this->atributo;
    }
}
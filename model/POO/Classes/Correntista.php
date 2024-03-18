<?php
declare(strict_types=1);

namespace Model\POO\Classes;

/**
 *
 */
class Correntista
{

    private $nome;
    private $idade;

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    function getNome(): string
    {
        return "Correntista, {$this->nome}";
    }
}
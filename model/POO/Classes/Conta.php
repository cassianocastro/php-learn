<?php
declare(strict_types=1);

namespace model\POO\Classes;

/**
 *
 */
class Conta
{

    private $titular;

    public function setTitular(string $nome): void
    {
        $this->titular = new Correntista();
        $this->titular->setNome($nome);
    }

    public function getTitular(): string
    {
        return $this->titular->getNome();
    }
}
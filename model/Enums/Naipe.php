<?php
declare(strict_types=1);

namespace Model\Enums;

/**
 *
 */
enum Naipe: string implements Colorido
{
    use Rectangle;

    case Copas   = "C";
    case Paus    = "P";
    case Ouros   = "O";
    case Espadas = "E";

    private const FOO = self::Espadas;

    public function getFoo(): self
    {
        return self::FOO;
    }

    public function getColor(): string
    {
        return match ($this)
        {
            Naipe::Copas, Naipe::Ouros  => "Vermelho",
            Naipe::Paus, Naipe::Espadas => "Preto",
        };
    }
}
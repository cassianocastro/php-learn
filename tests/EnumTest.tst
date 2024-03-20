<?php
declare(strict_types=1);

namespace Tests;

interface Colorido
{
    public function getColor(): string;
}

trait Rectangle
{

    public function getShape(): string
    {
        return "Rectangle";
    }
}

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

function getNaipe(Naipe $naipe): void
{
    print "Your naipe: $naipe->value";
}

$a = Naipe::Ouros;
echo "<pre>",
$a->getColor() . $a->getShape() . $a->getFoo()->value,
var_dump($a instanceof Naipe),
getNaipe(Naipe::Copas),
print_r(Naipe::cases(), true);
print PHP_EOL . var_dump(Naipe::tryFrom("Copas"));
phpinfo();
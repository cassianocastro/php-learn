<?php
declare(strict_types=1);

namespace Tests;

use Model\Enums\Naipe;

/**
 *
 */
function getNaipe(Naipe $naipe): void
{
    print "Your naipe: {$naipe->value}";
}

/**
 *
 */
function index(): void
{
    $a = Naipe::Ouros;

    echo "<pre>",
        $a->getColor() . $a->getShape() . $a->getFoo()->value,
        var_dump($a instanceof Naipe),
        getNaipe(Naipe::Copas),
        print_r(Naipe::cases(), true)
    ;

    print PHP_EOL . var_dump(Naipe::tryFrom("Copas"));
}
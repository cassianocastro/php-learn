<?php
declare(strict_types=1);

namespace PHP\Attributes\ExampleB;

use Attribute;

/**
 *
 */
#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
final class MyAttribute
{

    const VALUE = "value";

    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
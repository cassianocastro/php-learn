<?php
declare(strict_types=1);

namespace Tests;

use ReflectionClass;

/**
 *
 */
final class BTest
{

    /**
     * @test
     */
    public function canDumpAttrData(ReflectionClass $reflection): void
    {
        $attributes = $reflection->getAttributes(
            "Model\Attributes\ExampleB\MyAttribute"
        );

        foreach ( $attributes as $attribute )
        {
            var_dump(
                $attribute->getName(),
                $attribute->getArguments(),
                $attribute->newInstance()
            );
        }
    }
}
<?php
declare(strict_types=1);

namespace Tests;

use ReflectionObject;
use PHP\Attributes\ExampleA\{ ActionHandler, SetUp };

/**
 *
 */
final class ATest
{

    /**
     * @test
     */
    public function canExecuteAction(ActionHandler $handler): void
    {
        $reflection = new ReflectionObject($handler);
        $methods    = $reflection->getMethods();

        foreach ( $methods as $method )
        {
            $attributes = $method->getAttributes(SetUp::class);

            if ( count($attributes) > 0 )
            {
                $methodName = $method->getName();
                $handler->$methodName();
            }
        }

        $handler->execute();

        if ( file_exists("./src/test.html") )
        {
            echo file_get_contents("./src/test.html");
        }
    }
}
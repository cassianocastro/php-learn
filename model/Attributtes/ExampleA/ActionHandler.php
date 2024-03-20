<?php
declare(strict_types=1);

namespace Model\Attributes\ExampleA;

/**
 *
 */
interface ActionHandler
{

    public function execute(): void;
}
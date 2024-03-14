<?php
declare(strict_types=1);

namespace model\POO\ConcreteClass;

use model\POO\AbstractClass\HTMLElement;

/**
 *
 */
class HTMLTextElement extends HTMLElement
{

    public function __construct(string $text)
    {
        $this->tag = $text;
    }

    public function render(): string
    {
        return $this->tag;
    }
}
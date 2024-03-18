<?php
declare(strict_types=1);

namespace Model\POO\ConcreteClass;

use Model\POO\AbstractClass\HTMLElement;

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
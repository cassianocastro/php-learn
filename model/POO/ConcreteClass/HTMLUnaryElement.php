<?php
declare(strict_types=1);

namespace Model\POO\ConcreteClass;

use Model\POO\AbstractClass\HTMLElement;

/**
 *
 */
class HTMLUnaryElement extends HTMLElement
{

    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    public function render(): string
    {
        return "<{$this->tag}/>";
    }
}
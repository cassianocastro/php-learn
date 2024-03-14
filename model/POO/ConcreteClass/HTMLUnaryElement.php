<?php
declare(strict_types=1);

namespace model\POO\ConcreteClass;

use model\POO\AbstractClass\HTMLElement;

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
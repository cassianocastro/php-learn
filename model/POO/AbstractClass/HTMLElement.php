<?php
declare(strict_types=1);

namespace Model\POO\AbstractClass;

use ReflectionClass;

/**
 *
 */
abstract class HTMLElement
{

    protected $tag;

    public function __construct()
    {
        $this->tag = "";
    }

    protected function is_element($v): bool
    {
        if ( is_object($v) )
        {
            $r = new ReflectionClass(get_class($v));

            return $r->isSubclassOf('HTMLElement');
        }

        return false;
    }

    abstract public function render(): string;
}
<?php
declare(strict_types=1);

namespace Model\POO\ConcreteClass;

use Model\POO\Interfaces\iTemplate;

/**
 *
 */
class Template implements iTemplate
{

    private $vars;

    public function __construct()
    {
        $this->vars = [];
    }

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template): string
    {
        foreach ( $this->vars as $name => $value )
        {
            $template = str_replace("\{$name\}", $value, $template);
        }

        return $template;
    }
}
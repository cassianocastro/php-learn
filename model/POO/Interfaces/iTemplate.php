<?php
declare(strict_types=1);

namespace Model\POO\Interfaces;

/**
 *
 */
interface iTemplate
{

    public function setVariable($name, $var);

    public function getHtml($template): string;
}
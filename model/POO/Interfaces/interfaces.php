<?php
// namespace Interfaces;

/**
 *
 */
interface iTemplate
{

    public function setVariable($name, $var);

    public function getHtml($template): string;
}

/**
 *
 */
interface iHTMLElement
{

    public function render(): string;
}
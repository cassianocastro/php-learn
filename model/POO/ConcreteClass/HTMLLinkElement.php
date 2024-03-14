<?php
declare(strict_types=1);

namespace model\POO\ConcreteClass;

/**
 *
 */
class HTMLLinkElement extends HTMLBinaryElement
{

    protected $url;

    public function __construct(string $url, $conteudo)
    {
        $this->tag = "a";
        $this->conteudo = $conteudo;
        $this->url = $url;
    }
}
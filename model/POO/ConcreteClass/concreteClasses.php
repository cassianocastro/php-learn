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
        return "<$this->tag/>";
    }
}

/**
 *
 */
class HTMLBinaryElement extends HTMLElement
{

    protected $conteudo;

    public function __construct(string $tag, $conteudo)
    {
        $this->tag = $tag;
        $this->conteudo = $conteudo;
    }

    protected function renderOpenTag(): string
    {
        return "<{$this->tag}>";
    }

    protected function renderCloseTag(): string
    {
        return "</{$this->tag}>";
    }

    private function internalRenderContent($conteudo)
    {
        if ( $this->is_element($conteudo) )
        {
            return $conteudo->render();
        }

        return ( is_string($conteudo) ) ? $conteudo : "?";
    }

    public function render(): string
    {
        $conteudo = $this->conteudo;
        $res = $this->renderOpenTag();

        if ( is_array($conteudo) )
        {
            foreach ( $conteudo as $v )
            {
                $res .= $this->internalRenderContent($v);
            }
        }
        else
        {
            $res .= $this->internalRenderContent($conteudo);
        }

        $res .= $this->renderCloseTag();

        return $res;
    }
}

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
<?php
declare(strict_types=1);

namespace Model\POO\ConcreteClass;

use Model\POO\AbstractClass\HTMLElement;

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
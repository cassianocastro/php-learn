<?php
// namespace ConcreteClass;

// use Interfaces\iTemplate;
// use AbstractClass\{ ClasseAbstrata, HTMLElement, HTMLBinaryElement };

/**
 *
 */
class ClasseConcreta1 extends ClasseAbstrata
{

    protected function pegarValor(): string
    {
        return "ClasseConcreta1<br>";
    }

    public function valorComPrefixo($prefixo): string
    {
        return "{$prefixo}ClasseConcreta1<br>";
    }
}

/**
 *
 */
class ClasseConcreta2 extends ClasseAbstrata
{

    protected function pegarValor(): string
    {
        return "ClasseConcreta2<br>";
    }

    public function valorComPrefixo($prefixo): string
    {
        return "{$prefixo}ClasseConcreta2<br>";
    }
}

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
        return "<$this->tag>";
    }

    protected function renderCloseTag(): string
    {
        return "</$this->tag>";
    }

    private function internalRenderContent($conteudo)
    {
        if ( $this->is_element($conteudo) )
        {
            return $conteudo->render();
        }
        else
        {
            if ( is_string( $conteudo) )
            {
                return $conteudo;
            }
            else
            {
                return "?";
            }
        }
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

/**
 *
 */
class Template implements iTemplate
{

    private $vars;

    public function __construct()
    {
        $this->vars = array();
    }

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template): string
    {
        foreach ( $this->vars as $name => $value )
        {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

/**
 *
 */
class MyException extends Exception {}

/**
 *
 */
class Test
{

    public function testing()
    {
        try
        {
            try
            {
                throw new MyException('MyException: foo!');
            }
            catch ( MyException $e )
            {
                throw $e; // rethrow it
            }
        }
        catch ( Exception $e )
        {
            var_dump($e->getMessage());
        }
    }
}
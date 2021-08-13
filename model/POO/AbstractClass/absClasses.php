<?php
//namespace AbstractClass;

abstract class ClasseAbstrata
{
    // Força a classe que estender ClasseAbstrata
    // a definir esses métodos
    abstract protected function pegarValor(): string;
    abstract protected function valorComPrefixo($prefixo): string;

    // Método comum que pode ser implementado
    public function imprimir(): void
    {
        print $this->pegarValor();
    }
}

abstract class HTMLElement
{

    protected $tag;

    public function __construct()
    {
        $this->tag = "";
    }

    protected function is_element($v): bool
    {
        if (is_object($v)) {
            $r = new ReflectionClass(get_class($v));
            return $r->isSubclassOf('HTMLElement');
        }
        return false;
    }

    abstract public function render(): string;
}

?>

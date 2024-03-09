<?php

/**
 *
 */
class Pessoa
{

    /**
     * Atributos da classe
     */
    var $idade = 20;

    /**
     * Métodos da classe
     */
    public function mostra(): void
    {
        echo __METHOD__, PHP_EOL, "Idade da pessoa: {$this->idade}", PHP_EOL;
    }
}

/**
 *
 */
class ClasseExemplo
{

    private $atributo;

    public function setAtributo($valor): void
    {
        $this->atributo = $valor;
    }

    public function getAtributo()
    {
        return $this->atributo;
    }
}

/**
 *
 */
class Correntista
{

    private $nome;
    private $idade;

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    function getNome(): string
    {
        return "Correntista, {$this->nome}";
    }
}

/**
 *
 */
class Conta
{

    private $titular;

    public function setTitular(string $nome): void
    {
        $this->titular = new Correntista();
        $this->titular->setNome($nome);
    }

    public function getTitular(): string
    {
        return $this->titular->getNome();
    }
}

/**
 *
 */
class MinhaClasse
{

    private $atributo;

    function __construct(string $nome)
    {
        $this->atributo = $nome;
        echo "Construtor MinhaClasse: {$this->atributo}", PHP_EOL;
    }

    function __destruct()
    {
        echo "Destruindo MinhaClasse: {$this->atributo}", PHP_EOL;
    }
}

/**
 *
 */
class ClasseA
{

    protected $atributoA;

    function __construct()
    {
        echo "Constructor da Classe A", PHP_EOL;
        $this->atributoA = "A";
    }

    function __destruct()
    {
        echo "Destructor da Classe A", PHP_EOL;
    }

    public function mostraApublica()
    {
        echo "Classe A - mostraA publica - atributoA: {$this->atributoA}", PHP_EOL;
    }

    protected function mostraAprotegida()
    {
        echo "Classe A - mostraA protegida - atributoA: {$this->atributoA}", PHP_EOL;
    }
}

/**
 *
 */
class ClasseB extends ClasseA
{

    private $atributoB;

    function __construct()
    {
        echo "Chamando o constructor da classe pai (forçado)", PHP_EOL;

        parent::__construct();

        echo "Constructor da Classe B", PHP_EOL;

        $this->atributoB = "B";
    }

    function __destruct()
    {
        echo "Destructor da Classe B", PHP_EOL;

        echo "Chamando o destructor da classe pai (forçado)", PHP_EOL;

        parent::__destruct();
    }

    public function mostraB(): void
    {
        echo "Classe B - Chamando mostraAprotegida", PHP_EOL;

        $this->mostraAprotegida();

        echo "Classe B - mostraB - atributoB: {$this->atributoB}", PHP_EOL;
    }
}

/**
 *
 */
class ClasseC extends ClasseA
{

    private $atributoC;

    function __construct()
    {
        echo "Escondendo o constructor da classe pai", PHP_EOL;

        // parent::__construct(); // Chama o construtor da Superclasse

        echo "Constructor da Classe C", PHP_EOL;

        $this->atributoC = "Y";
    }

    // como não reescreveu destructor assume da pai
}

/**
 *
 */
class ClasseD extends ClasseA
{
    // se não criar o constructor nem o destructor, acaba herdando da classe pai
}

/**
 *
 */
class SimpleObject
{

    static private $_instanceCount  = 0;
    static private $_instancesArray = [];

    private $_instanceId;
    private $_instanceGUID;

    function __construct()
    {
        $this->_instanceId   = self::$_instanceCount++;
        $this->_instanceGUID = self::createInstanceGUID();

        self::$_instancesArray[$this->_instanceGUID] = &$this;
    }

    static public function getInstanceCount()
    {
        return static::$_instanceCount;
    }

    static public function getInstance($guid)
    {
        if ( array_key_exists($guid, self::$_instancesArray) )
        {
            return self::$_instancesArray[$guid];
        }

        return null;
    }

    static public function getAllInstances()
    {
        return self::$_instancesArray;
    }

    public function selfSerialize()
    {
        return serialize($this);
    }

    static public function getAllSerialized()
    {
        return serialize(self::$_instancesArray);
    }

    function getInstanceGUID()
    {
        return $this->_instanceGUID;
    }

    function getInstanceId()
    {
        return $this->_instanceId;
    }

    static private function createInstanceGUID()
    {
        if ( function_exists('com_create_guid') )
        {
            return trim(com_create_guid(), '{}');
        }

        $data    = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}

/**
 *
 */
class ChildObject extends SimpleObject
{

}

/**
 *
 */
class ChildObject2 extends SimpleObject
{

}
<?php
declare(strict_types=1);

namespace Model\POO\Classes;

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
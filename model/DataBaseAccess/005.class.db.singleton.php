<?php
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");
define("DB_NAME", "t308");

abstract class DbSingleton
{

    static protected $host   = DB_HOST;
    static protected $user   = DB_USER;
    static protected $pass   = DB_PASS;
    static protected $dbname = DB_NAME;
    static protected $instance = [];

    private function __construct()
    {

    }

    static abstract protected function connect();

    static public function getInstance()
    {
        echo __METHOD__, get_called_class(), PHP_EOL;

        if ( ! isset(self::$instance[get_called_class()]) )
        {
            echo "Criou nova instancia", PHP_EOL;

            self::$instance[get_called_class()] = static::connect();
        }

        return self::$instance[get_called_class()];
    }
}

class DStPDO extends DbSingleton
{

    static protected function connect()
    {
        try
        {
            return new PDO(
                "mysql:host=" . static::$host . ";dbname=" . static::$dbname,
                static::$user,
                static::$pass,
                [ PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'" ]
            );
        }
        catch ( Exception $e )
        {
            die($e->getMessage());
        }
    }
}

class DStMySQLi extends DbSingleton
{

    static protected function connect()
    {
        try
        {
            return new mysqli(static::$host, static::$user, static::$pass, static::$dbname);
        }
        catch ( Exception $e )
        {
            die($e->getMessage());
        }
    }
}
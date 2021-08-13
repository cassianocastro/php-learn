<?php

define("DB_USER","root");
define("DB_PASS","");
define("DB_HOST","localhost");
define("DB_NAME","t308");

abstract class DbSingleton
{

    protected static $host   = DB_HOST;
    protected static $user   = DB_USER;
    protected static $pass   = DB_PASS;
    protected static $dbname = DB_NAME;
    protected static $instance = array();

    private function __construct()
    {

    }

    protected abstract static function connect();

    public static function getInstance()
    {
        echo __METHOD__, get_called_class(), PHP_EOL;
        if ( ! isset(self::$instance[get_called_class()]))
        {
            echo "Criou nova instancia", PHP_EOL;
            self::$instance[get_called_class()] = static::connect();
        }

        return self::$instance[get_called_class()];
    }

}

class DStPDO extends DbSingleton
{

    protected static function connect()
    {
        try {
            return new PDO(
                "mysql:host=" . static::$host .
                ";dbname=" . static::$dbname,
                static::$user,
                static::$pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

class DStMySQLi extends DbSingleton
{

    protected static function connect()
    {
        try {
            return new mysqli(
                static::$host,
                static::$user,
                static::$pass,
                static::$dbname
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>

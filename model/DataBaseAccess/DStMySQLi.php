<?php
declare(strict_types=1);

namespace Model\DataBaseAccess;

use Exception, mysqli;

/**
 *
 */
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
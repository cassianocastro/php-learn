<?php
declare(strict_types=1);

namespace Model\DataBaseAccess;

use Exception, PDO;

/**
 *
 */
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
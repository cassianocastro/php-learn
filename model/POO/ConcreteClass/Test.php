<?php
declare(strict_types=1);

namespace model\POO\ConcreteClass;

use Exception;

/**
 *
 */
class MyException extends Exception
{

}

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
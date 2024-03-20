<?php
declare(strict_types=1);

namespace Tests;

use Monolog\{ Level, Logger };
use Monolog\Handler\StreamHandler;

/**
 *
 */
final class MonologTest
{

    /**
     * @test
     */
    public function createLog(): void
    {
        $log = new Logger("tests");

        $log->pushHandler(
            new StreamHandler(__DIR__ . "/../lib/logs/test.log", Level::Info)
        );

        $log->info("testing... ok");
    }
}
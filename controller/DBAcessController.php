<?php
declare(strict_types=1);

namespace controller;

use model\DataBaseAcess\{ DStMySQLi, DStPDO };

/**
 * Section: Testando MySQLi
 */
function testMySQLi(): void
{
    var_dump(DStMySQLi::getInstance());

    $dbm2 = DStMySQLi::getInstance();
    $resultm = $dbm2->query("SELECT * FROM usuario");

    var_dump($resultm);
}

/**
 * Section: Testando PDO
 */
function testPDO(): void
{
    $dbp = DStPDO::getInstance();

    var_dump($dbp);

    $dbp2 = DStPDO::getInstance();
    $resultp = $dbp2->query('SELECT * FROM usuario');

    var_dump($resultp);

    echo $resultp->rowCount();
}

/**
 * Section: Testando MySQLi #2
 */
function testMySQLi2(): void
{
    $dbm = DStMySQLi::getInstance();

    var_dump($dbm);

    $dbm2 = DStMySQLi::getInstance();
    $resultm = $dbm2->query('SELECT * FROM usuario');

    var_dump($resultm);
}

/**
 * Section: Testando PDO #2
 */
function testPDO2(): void
{
    $dbp = DStPDO::getInstance();

    var_dump($dbp);

    $dbp2 = DStPDO::getInstance();
    $resultp = $dbp2->query('SELECT * FROM usuario');

    var_dump($resultp);

    echo $resultp->rowCount();
}
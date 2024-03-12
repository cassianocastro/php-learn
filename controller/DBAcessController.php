<?php
// Section: Testando MySQLi

require_once "../model/DataBaseAccess/005.class.db.singleton.php";

var_dump(DStMySQLi::getInstance());

$dbm2 = DStMySQLi::getInstance();
$resultm = $dbm2->query("SELECT * FROM usuario");

var_dump($resultm);
?>

<?php
// Section: Testando PDO

$dbp = DStPDO::getInstance();

var_dump($dbp);

$dbp2 = DStPDO::getInstance();
$resultp = $dbp2->query('SELECT * FROM usuario');

var_dump($resultp);

echo $resultp->rowCount();
?>

<?php
// Section: Testando MySQLi #2

$dbm = DStMySQLi::getInstance();

var_dump($dbm);

$dbm2 = DStMySQLi::getInstance();
$resultm = $dbm2->query('SELECT * FROM usuario');

var_dump($resultm);
?>

<?php
// Section: Testando PDO #2

$dbp = DStPDO::getInstance();

var_dump($dbp);

$dbp2 = DStPDO::getInstance();
$resultp = $dbp2->query('SELECT * FROM usuario');

var_dump($resultp);

echo $resultp->rowCount();
?>
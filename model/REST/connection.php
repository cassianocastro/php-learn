<?php
/*
CREATE TABLE IF NOT EXISTS `produto` (
`produto_id` INT NOT NULL AUTO_INCREMENT ,
`produto_nome` VARCHAR(30) NOT NULL ,
`produto_prreco` INT NOT NULL ,
`produto_qtd` INT NOT NULL ,
PRIMARY KEY (`produto_id`)) ENGINE = InnoDB;
*/
$conn = new mysqli(
    'localhost',
    'root',
    '',
    't308'
);

if ($conn->connect_error) {
    die(
        'Connect Error ('
        . $conn->connect_errno . ') '
        . $conn->connect_error
    );
}

?>

<?php
require_once __DIR__ . '/connection.php';

/**
 *
 */
function addProduct(): array
{
    global $conn;

    $name   = $_REQUEST['produto_nome'];
    $price  = $_REQUEST['produto_preco'];
    $qty    = $_REQUEST['produto_qtd'];

    $sucess = mysqli_query(
        $conn,
        <<<SQL
            INSERT INTO
                produto(produto_nome, produto_preco, produto_qtd)
            VALUES
                ($name, $price, $qty)
        SQL
    );

    if ( $sucess )
    {
        return [
            "status"  => "1",
            "message" => "success",
            "result"  => "produto add successfully"
        ];
    }

    return [
        "status"  => "1",
        "message" => "success",
        "result"  => "Something wrong!"
    ];
}

/**
 *
 */
function updateProduct(): array
{
    global $conn;

    $id    = $_REQUEST['produto_id'];
    $name  = $_REQUEST['produto_nome'];
    $price = $_REQUEST['produto_preco'];
    $qty   = $_REQUEST['produto_qtd'];

    $success = mysqli_query(
        $conn,
        <<<SQL
            UPDATE
                produto
            SET
                produto_nome = $name, produto_preco = $price, produto_qtd = $qty
            WHERE
                produto_id = $id
        SQL
    );

    if ( $success )
    {
        return [
            "status"  => "1",
            "message" => "success",
            "result"  => "produto Update successfully"
        ];
    }

    return [
        "status"  => "1",
        "message" => "success",
        "result"  => "Something wrong!"
    ];
}

/**
 *
 */
function deleteProduct(): array
{
    global $conn;

    $id = $_REQUEST['produto_id'];

    $success = mysqli_query(
        $conn,
        "DELETE FROM produto WHERE produto_id = {$id}"
    );

    if ( $success )
    {
        return [
            "status"  => "1",
            "message" => "success",
            "result"  => "produto Update successfully"
        ];
    }

    return [
        "status"  => "1",
        "message" => "success",
        "result"  => "Something wrong!"
    ];
}

/**
 *
 */
function getProducts(): array
{
    global $conn;

    $result = mysqli_query($conn, "SELECT * from produto");

    while ( $row = mysqli_fetch_row($result) )
    {
        $temp_cat[] = [
            "produto_id"    => $row[0],
            "produto_nome"  => $row[1],
            "produto_preco" => $row[2],
            "produto_qtd"   => $row[3]
        ];
    }

    return [
        "status"  => "1",
        "message" => "success",
        "result"  => $temp_cat
    ];
}

try
{
	$method = $_SERVER["REQUEST_METHOD"];

    switch ( $method )
    {
        case 'GET':
            $data = getProducts();
            break;
        case 'POST':
            $data = addProduct();
            break;
        case 'PUT':
            $data = updateProduct();
            break;
        case 'DELETE':
            $data = deleteProduct();
            break;
        default:
            throw new Exception("Please enter proper request method!", 0);
    }
}
catch ( Exception $e )
{
	$data = [
        "status"  => $e->getCode(),
        "message" => $e->getMessage()
    ];
}

print json_encode($data);
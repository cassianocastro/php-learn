<?php
try
{
	require_once __DIR__ . '/connection.php';

	$method_name = $_SERVER["REQUEST_METHOD"];

    echo $method_name;

	if ( $_SERVER["REQUEST_METHOD"] )
    {
		switch ( $method_name )
        {
			case 'GET':
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

				$data = [
					"status"  => "1",
					"message" => "success",
					"result"  => $temp_cat
                ];
			    break;
			case 'POST':
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
					$data = [
						"status"  => "1",
						"message" => "success",
						"result"  => "produto add successfully"
                    ];
                }
				else
                {
					$data = [
						"status"  => "1",
						"message" => "success",
						"result"  => "Something wrong!"
                    ];
                }
			    break;
			case 'PUT':
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
					$data = [
						"status"  => "1",
						"message" => "success",
						"result"  => "produto Update successfully"
                    ];
                }
				else
                {
					$data = [
						"status"  => "1",
						"message" => "success",
						"result"  => "Something wrong!"
                    ];
                }
			    break;
			case 'DELETE':
				$id = $_REQUEST['produto_id'];

                $success = mysqli_query(
                    $conn,
                    "DELETE FROM produto WHERE produto_id = {$id}"
                );

				if ( $success )
                {
					$data = [
						"status"  => "1",
						"message" => "success",
						"result"  => "produto Update successfully"
                    ];
                }
				else
                {
					$data = [
						"status"  => "1",
						"message" => "success",
						"result"  => "Something wrong!"
                    ];
                }
			    break;
		}

		echo json_encode($data);
	}
	else
    {
		$data = [
			"status"  => "0",
			"message" => "Please enter proper request method!"
        ];

		echo json_encode($data);
	}
}
catch ( Exception $e )
{
	echo "Caught exception: {$e->getMessage()}\n";
}
<!DOCTYPE html>
<html lang="pt-br">
	
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
  </head>
  
  <body class="container">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script>
    
  </body>
  
</html>

<?php

$dbPass = "";
$dbUser = "root";
$dbServer = "localhost";
$dbName = "phpfundamentals";

$connection = new mysqli($dbServer, $dbUser, $dbPass, $dbName);

if($connection->connect_errno) {
	echo "falha na conexão. {$connection->connect_error}";
	exit("falha na conexão. {$connection->connect_error}");
}

// var_dump($connection);

// DELETE QUERY
// $query = "DELETE FROM authors WHERE id IN (6,7,8,9,10,11)";

// UPDATE QUERY
// $query = "UPDATE authors SET name = 'thierry' WHERE id = 2";

// INSERT QUERY
// $query = "INSERT INTO authors SET name = 'jonas', phone = '54654'";
// $query = "INSERT INTO authors (name, phone) VALUES ('teste', '1')";

// $connection->query($query);

// SELECT QUERY
$query = "SELECT name, phone FROM authors";

echo "<h1>area de resultados</h1>";

// printando resultado do select
$resultObj = $connection->query($query);

if($connection->insert_id > 0) {
	echo "<p class='lead alert alert-success'>novo usuario criado: {$connection->insert_id}.</p>";
} else {
	echo "<p class='lead alert alert-danger'>nenhum usuário novo foi criado.</p>";
}

// condicao para carregar cada linha da tabela no select
if($resultObj->num_rows > 0) {
	while($singleRowResult = $resultObj->fetch_assoc()) {
		echo "<p>nome: {$singleRowResult['name']}
			  phone: {$singleRowResult['phone']}</p>".PHP_EOL;
	}
}

$resultObj->close();
$connection->close();

?>



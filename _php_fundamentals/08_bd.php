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
$query = "INSERT INTO authors (name, phone) VALUES ('teste', '1')";

$connection->query($query);

// SELECT QUERY
$query = "SELECT name, phone FROM authors";

$resultObj = $connection->query($query);

echo "<h1>area de resultados</h1>";

// utilizado no insert, após a query
echo "<p>Novo usuario criado: {$connection->insert_id}.</p>";

// condicao para carregar cada linha da tabela no select
if($resultObj->num_rows > 0) {
	while($singleRowResult = $resultObj->fetch_assoc()) {
		echo "id: {$singleRowResult['id']}
			  nome: {$singleRowResult['name']}
			  phone: {$singleRowResult['phone']}".PHP_EOL;
		echo "<br>";
	}
}

$resultObj->close();
$connection->close();


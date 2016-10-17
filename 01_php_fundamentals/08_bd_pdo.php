<?php
$dbPass = "";
$dbUser = "root";
$dbServer = "localhost";
$dbName = "phpfundamentals";

// criamos um novo objeto a partir da class PDO
$connection = new PDO("mysql:host={$dbServer}; dbname={$dbName}", $dbUser, $dbPass);

// teste conexão
if($connection->connect_errno) {
	echo "falha na conexão. {$connection->connect_error}";
	exit("falha na conexão. {$connection->connect_error}");
}
?>

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

// SELECT QUERY
$query = "SELECT name, phone FROM authors";

echo "<h1>area de resultados</h1>";

// printando resultado do select
$resultObj = $connection->query($query);

// condicao para carregar cada linha da tabela no select.
// utilizamos o método rowCount() do PDO para contar as linhas
if($resultObj -> rowCount() > 0) {
  // condição foreach para fatiar cada resultado
	foreach($resultObj as $singleRowFromQuery) {
		echo "<p>nome: {$singleRowFromQuery['name']}
			  phone: {$singleRowFromQuery['phone']}</p>".PHP_EOL;
	}
}

// encerramos a conexão com o BD
$resultObj = null;
$connection = null;

?>



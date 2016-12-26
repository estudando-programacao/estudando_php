<!DOCTYPE html>

<html lang="pt-br">

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

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script>
    </head>

    <body class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="display-1 mark" align="center">join our mailing list!</h1>
            </div>

            <div class="col-md-6">

                <div class="card">
                    
                    <div class="card-header">Card</div>
                    
                    <div class="card-block">
                        
                        <form method="post" action="final.php">
                            
                            <div class="form-group">
                                <label for="exampleSelect1">Select</label>
                                <select class="form-control" id="exampleSelect1">
                                  <option>1</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-check">
                                    
                                    Favorite:
                                    
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input">
                                      Check 1
                                    </label>
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input">
                                      Check 2
                                    </label>
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input">
                                      Check 3
                                    </label>
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input">
                                      Check 4
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="textArea">Textarea</label>
                                <textarea class="form-control" id="textArea" rows="3"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="name">
                                <small id="name" class="form-text text-muted">enter your name, please</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="name">email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="email">
                                <small id="email" class="form-text text-muted">enter your e-mail, please</small>
                            </div>
                            
                            <fieldset class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="rcvNewsYes" id="rcvNews" value="yes" checked>yes</label>
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="rcvNewsYes" id="rcvNews" value="no">no</label>
                                </div>
                            </fieldset>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>


        </div>

        <!---------------------------------------------------------------------------->

        <?php

            // SELECT QUERY
            // $query = "SELECT name, phone FROM authors";
            
            // echo "<h1>area de resultados</h1>";
            
            // // printando resultado do select
            // $resultObj = $connection->query($query);
            
            // // condicao para carregar cada linha da tabela no select.
            // // utilizamos o método rowCount() do PDO para contar as linhas
            // if($resultObj -> rowCount() > 0) {
            //   // condição foreach para fatiar cada resultado
            // 	foreach($resultObj as $singleRowFromQuery) {
            // 		echo "<p>nome: {$singleRowFromQuery['name']}
            // 			  phone: {$singleRowFromQuery['phone']}</p>".PHP_EOL;
            // 	}
            // }
            
            // // encerramos a conexão com o BD
            // $resultObj = null;
            // $connection = null;
        
        ?>

    </body>

</html>

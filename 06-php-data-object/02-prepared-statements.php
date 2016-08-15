<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript">
    </script>
</head>
<body class="container" style="margin-top: 80px;">

    <p class="text-center">PDO - PHP Data Object</p>

    <?php
    require('./_app/Config.inc.php');

    $PDO = new Conn;
    $name = "firefox";
    $views = "128";

    try {
      // Definimos a query / note que nos campos Values, definimos os valores com duas interrogações, para evitar hacks (sql injection)
      $QRCreate = "INSERT INTO  ws_siteviews_agent (agent_name, agent_views) VALUES (?, ?)";
      // aqui utilizamos a variável $Create para preparar a execução da query
      $Create = $PDO->getConn()->prepare($QRCreate);
      // abaixo, definimos os valores do primeiro e segundo campo do VALUES a partir da query
      // note que a posição é definida pela ordem dos campos e que o tipo do dado também é definido.
      $Create->bindValue(1, 'Chrome', PDO::PARAM_STR);
      $Create->bindValue(2, '8', PDO::PARAM_INT);
      // executamso metodo do PDO (execute) a partir do
      $Create->execute();

      if($Create->rowCount()):
        echo "{$PDO->getConn()->lastInsertId()} - Cadastro com Sucesso!<hr>";
      endif;

    } catch (PDOException $e) {
      // caso seja apresentada falha, o catch vai disparar erro (exceções)
      PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
    }


    ?>

</body>
</html>

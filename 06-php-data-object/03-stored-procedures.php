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

    $Conn = new Conn;

    try {
      $Query = "SELECT * FROM  ws_siteviews_agent WHERE agent_name = :name";
      $Exe = $Conn->getConn()->prepare($Query);

      $Exe->bindValue(":name", "Chrome");
      $Exe->execute();
      // fetchAll retorna todos os valores resultantes da query, de acordo com o indice
      $Chrome = $Exe->fetchAll(PDO::FETCH_ASSOC);

      $Exe->bindValue(":name", "Safari");
      $Exe->execute();
      // fetch retorna apenas um valor da query, útil quando a intenção é apenas retornar um valor (avisos, por exemplo).
      $Safari = $Exe->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
      PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
    }

    if($Chrome):
      var_dump($Chrome);
    endif;

    ?>
</body>
</html>

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

    // criamos objeto a partir da classe Read
    $read = new Read;
    // a partir da instância gerada, definimos os parametros
    // note que utilizamos os :links para interligar os dados
    // note o valor que foi declarado para o parametro $ParseString (name=firefox&views=10)
    $read->ExeRead('ws_siteviews_agent', 'WHERE agent_name = :name AND agent_views >= :views', "name=Safari&views=2");

    // debug
    var_dump($read);
    ?>
</body>
</html>

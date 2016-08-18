<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript">
        
    </script>
</head>
<body class="container" style="margin-top: 80px;">
    <p class="text-center">PDO - PHP Data Object</p>
    <?php
    require('./_app/Config.inc.php');
    
    $Dados = ['agent_name' => 'Safari', 'agent_views' => '10'];
    
    $update = new Update;
    $update->ExeUpdate('ws_siteviews_agent', $Dados, "WHERE agent_id = :id", "id=10");
    
    if ($update->getResult()):
        echo "{$update->getRowCount()} resultado(s) alterados.";
        echo "<hr>";
    endif;
    
    $update->setPlaces('id=10');
    $update->setPlaces('id=12');
    $update->setPlaces('id=13');
    $update->setPlaces('id=14');
        
    var_dump($update);  
    ?>
</body>
</html>

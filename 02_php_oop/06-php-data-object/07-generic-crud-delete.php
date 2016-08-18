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

        $deleta = new Delete;
        $deleta->ExeDelete('ws_siteviews_agent', "WHERE agent_id >= :id", 'id=1');
        
        if($deleta->getResult()):
            echo "{$deleta->getRowCount()} registro(s) removidos com sucesso!<hr>";
        endif;
        
        var_dump($deleta);
        ?> 
    </body>
</html>

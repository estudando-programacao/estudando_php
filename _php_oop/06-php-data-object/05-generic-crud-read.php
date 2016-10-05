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

        // criamos objeto a partir da classe Read
        $read = new Read;

        // a partir da instância gerada, definimos os parametros
        // note que utilizamos os :links para interligar os dados
        // note o valor que foi declarado para o parametro $ParseString (name=firefox&views=10)
        $read->ExeRead('ws_siteviews_agent', 'WHERE agent_name = :name AND agent_views >= :views LIMIT :limit', "name=Chrome&views=1&limit=3");
        $read->setPlaces("name=Firefox&views=10&limit=5");
        $read->setPlaces("name=Safari&views=1&limit=10");

        // debug    
        var_dump($read);
        echo "<hr>";

        // debug com validação
        if ($read->getRowCount() >= 1):
            echo '<hr>';
            var_dump($read->getResult());
        endif;

        $read->FullRead("SELECT * FROM ws_siteviews_agent LIMIT :limit", "limite=3");
        ?>
    </body>
</html>

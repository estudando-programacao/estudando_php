<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" type="text/css" />
<body class="container">
    <?php

        require('./inc/Config.inc.php');
        
        $produto = new ResolucaoDeEscopo("Livro de PHP", 60.00);
        
        var_dump($produto);
        
    ?>
</body>

</html>

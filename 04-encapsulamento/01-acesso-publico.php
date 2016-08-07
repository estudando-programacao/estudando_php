<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" type="text/css" />

<body class="container" style="margin-top:100px;">
    <?php
        require('./inc/Config.inc.php');
        
        $user = new AcessoPublico ("thierry rene", "thierry@teste.com");
        $userDois = new AcessoPublico("marcos siqueira", "zerozero@hotmail.com");
        
        var_dump($user);
        echo "<hr>";
        var_dump($userDois);
        
    ?>
</body>

</html>

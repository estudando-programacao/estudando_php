<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
</head>
<body class="container" style="margin-top:100px;">
    <?php
        require('./inc/Config.inc.php');
        
        // criamos um objeto a partir da classe ComposicaoUsuario
        $thierry = new ComposicaoUsuario("thierry rene", "teste@teste.com");
        $thierry->CadastrarEndereco("São Paulo", "SP");
        
        echo "<hr>O email de {$thierry->Nome} é {$thierry->Email}.";
        echo "<br>{$thierry->Nome} mora em {$thierry->getEndereco()->getCidade()}/{$thierry->getEndereco()->getEstado()}.<hr>";
        
        var_dump($thierry);
    ?>
</body>  
</html>

<!-- https://treinando-php-thierryrene.c9users.io/04-arquitetura-e-conceito/03-modelo-de-agregacao.php -->
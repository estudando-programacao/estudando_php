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
        
        // note que o primeiro objeto agrega atributos publicos.
        $thierry = new AssociacaoCliente("thierry", "teste@teste.com");
        // interamos o objeto thierry ao objeto login
        $login = new AssociacaoLogin($thierry);
        
        if ($login->getLogin()):
            // exemplos de interação via associação. note que utilizamos os parametros publicos de outra classe, pelo simples fato da interarmos os objetos. Note que interaçãp é feita a partir dos objetos, e como os parametros ficam acessiveis.
            // note que utilizamos duas vezes os mesmo métodos getCliente(), pois o mesmo é declarado em duas classes.
            echo "gerenciando o cliente id: {$login->getCliente()->getCliente()}<br>";
            echo "{$login->getCliente()->getNome()} logou com sucesso usando o e-mail {$login->getCliente()->getEmail()}.<hr>";
        else:
            echo "Erro ao logar";
        endif; 
        
        // testes básicos de associacao
        // $cliente->AssociacaoCliente->getCliente;
        // $login->AssociacaoLogin->getLogin; 
        
        var_dump($thierry, $login);
    ?>
</body>
</html>

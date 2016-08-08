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
        
        $maria = new AcessoProtegido("thierry rene", "asdasd@msn.com");
        $pablo = new AcessoProtegidoFilha("pablo", "pablo@email.com");
        
        $maria->Nome = "maria santos";
        // teste de atribuição de valor em parametro protegido. teste deve retornar erro.
        // $maria->Email = "mariasantos@server.com";
        $maria->setEmail("maria@msn.com");
        // teste de utilização de método protegido. teste deve retornar erro, já que o método protegido deve apenas ser acessado por uma classe filha.
        // $maria->setNome("mariazona");
        // debug $maria
        var_dump($maria);
        
        // teste em metodo protegido com objeto da classe filha. deve retornar erro, já
        //$pablo->setNome("Rosana");
        $pablo->AddCpf("thierryrene", "12312312332");
        var_dump($pablo);
        
    ?>
</body>

</html>

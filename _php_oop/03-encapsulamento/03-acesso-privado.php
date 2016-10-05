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
        
        // novo objeto herdado da classe AcessoPrivado / todos os atributos são private
        $user = new AcessoPrivado($Nome, $Email, $CPF);
        // nome que para atribuirmos um valor ao atributo $Nome, precisamso utilizar um método, para setar o valor, após validação
        $user->setNome("thierryrenematos");
        // teste de validação de email com valor falso. teste deve retornar falha, já que valor atribuido não é um email válido.
        // $user->setEmail("asdasda");
        // teste de validação de email com valor verdadeiro.
        $user->setEmail("email@email.com");
        $user->setCPF("12345678978");
        
        // debug
        var_dump($user);
        
        
    ?>
</body>

</html>

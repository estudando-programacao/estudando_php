<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    require('./inc/Config.inc.php');
    
    $pessoa = new Heranca("thierry rene", $Idade);
    
    $pessoa->Formar('Pro PHP');
    $pessoa->Formar('JavaScript');
    $pessoa->Formar('React');
    $pessoa->Formar('HTML');
    
    $pessoa->Envelhecer();
    $pessoa->Envelhecer();
    $pessoa->Envelhecer();
    $pessoa->Envelhecer();
    
    $pessoa->VerPessoa();
    
    var_dump($pessoa);
    ?>
</body> 

</html>
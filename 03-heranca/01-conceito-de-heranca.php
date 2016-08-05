<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    require('./inc/Config.inc.php');
    
    // $pessoa = new Heranca("thierry rene", $Idade);
    $pessoa = new Heranca("thierry rene", 20);

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
<<<<<<< HEAD
=======
    
    echo "<hr>";
    
    $pessoaME = new HerancaJuridica("Thierry Rene", 20, "WT LAB");
    $pessoaME->Formar('Pro PHP');
    $pessoaME->Formar('JavaScript');
    $pessoaME->Formar('React');
    $pessoaME->Formar('HTML');
    
    $pessoaME->Envelhecer();
    $pessoaME->Envelhecer();    
    $pessoaME->Envelhecer();
>>>>>>> 83003470305caf499db3cdbf0caa48991fb6fbf3

    $pessoaME->VerEmpresa();

    $pessoaME->Contratar("Marcos");
    $pessoaME->Contratar("Jake");    
    $pessoaME->Contratar("Ramon");

    $pessoaME->VerEmpresa();

    
    var_dump($pessoaME);
    ?>
</body> 

</html>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    require('./inc/Config.inc.php');

    // $conta = new Abstracao("thierry rene", 1500);
    // $conta->Depositar(1400);
    // $conta->Sacar(100);
    // $conta->Sacar(200);
    // $conta->Sacar(100);
    // $conta->Sacar(10);
    // var_dump($conta);
    
    // $contaDois = new Abstracao("marcos", 6000);
    // $contaDois->Transferir(2000, $conta);
    // var_dump($contaDois);
        
    $cc = new AbstracaoCC("robson", 0, 1000);
    var_dump($cc);
    
    $cp = new AbstracaoCP("thierry", 0, 2000);
    ?>
</body>

</html>

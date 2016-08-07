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
        
        $cp = new AbstracaoCP("marcos", 200);
        $cp->Depositar(123);
        $cp->VerSaldo();
        var_dump($cp);
        
        echo "<hr>";
            
        $cc = new AbstracaoCC("thierry rene dos santos matos", 0, 100000);
        $cc->VerSaldo();
        $cc->Depositar(5000);
        $cc->Sacar(260);
        $cc->Sacar(232);
        $cc->Transferir(100, $cp);
        var_dump($cc);
        
    ?>
</body>

</html>

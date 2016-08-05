<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    require('./inc/Config.inc.php');

    $boleto = new Polimorfismo("Pro PHP", 50365);
    $boleto->Pagar();
    var_dump($boleto);
    echo "<hr>";

    $deposito = new PolimorfismoDeposito("Pro PHP", 50365);
    $deposito->Pagar();    
    var_dump($deposito);
    echo "<hr>";

    $cartao = new PolimorfismoCartao("Pro PHP", 50365);
    var_dump($cartao);
    $cartao->Pagar();
    $cartao->Pagar(5);

    // $deposito2 = new PolimorfismoDeposito2("Laravel 5", 500);
    // $deposito2->Pagar();
    // var_dump($deposito2);
    // echo "<hr>";
    
    ?>
</body> 

</html>
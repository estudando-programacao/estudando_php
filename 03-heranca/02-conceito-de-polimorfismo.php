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
    echo "<hr>";    

    $deposito = new PolimorfismoDeposito("Pro PHP", 50365);
    $deposito->Pagar();

    var_dump($boleto);
    echo "<hr>";

    var_dump($deposito);
    echo "<hr>";
    
    ?>
</body> 

</html>
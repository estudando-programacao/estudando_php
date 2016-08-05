<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    require('./class/Polimorfismo.php');

    $boleto = new Polimorfismo("Pro PHP", 50365);
    $boleto->Pagar();
    echo "<hr>";
 
    var_dump($boleto);
    echo "<hr>";

    $deposito = new PolimorfismoDeposito("React.JS", 1000);
    
    var_dump($deposito);

    ?>
</body> 

</html>
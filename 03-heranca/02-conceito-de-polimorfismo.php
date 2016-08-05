<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    require('./class/Polimorfismo.class.php');

    $boleto = new Polimorfismo("Pro PHP", 50365);
    $boleto->Pagar();
    echo "<hr>";    

    $deposito = new PolimorfismoDeposito("Pro PHP", 50365);

    var_dump($boleto);
    echo "<hr>";

    var_dump($deposito);
    echo "<hr>";
    
    ?>
</body> 

</html>
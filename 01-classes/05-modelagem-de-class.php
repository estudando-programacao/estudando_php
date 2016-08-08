<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    
    require('./class/ModelagemClass.class.php');
    
    $thierry = new ModelagemClass("thierry", 20, "webdev", 5000);
    $thierry->Trabalhar("portal", 1200);
    
    var_dump($thierry);
    
    ?>
</body> 

</html>
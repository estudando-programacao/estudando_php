<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    
    // arquivo abaixo carrega automaticamente os arquivos class presentes na pasta class
    require('./inc/Config.inc.php');
    
    // carregando objetos
    $classeA = new ClassesObjetos();
    $classeB = new AtributosMetodos();
    $classeC = new ComportamentoInicial("thierry", 26, "web dev", 100);
    
    var_dump($classeA, $classeB, $classeC);

    ?>
    
</body> 

</html>
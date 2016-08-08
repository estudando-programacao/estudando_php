<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    
    require('./class/ComportamentoInicial.class.php');
    
    // a classe não precisa ser declarada com parenteses, neste caso o nosso constructor defini que o objeto deve ser criado com parenteses se não é apresentado erro.
    $thierry = new ComportamentoInicial('thierry', 20, 'webdev', '1');
    $marcos = new ComportamentoInicial('marcos', 20, 'teste', '2');
    $pedro = new ComportamentoInicial('pedro', 20, 'teste2', '3');
        
    $thierry->Nome = 'Thierry';
    $thierry->Salario = 2000;
    
    // apontamento ao metodo deve ser feito com parenteses, se não o foco é um atributo
    $thierry->ver();
    
    ?>
</body>

</html> 
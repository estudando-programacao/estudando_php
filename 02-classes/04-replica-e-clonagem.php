<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
</head>
<body>
    <?php
    
    require('./class/ReplicaClonagem.class.php');
    
    // novo objeto a partir da class ReplicaClonagem
    $readA = new ReplicaClonagem("posts", "categoria='noticias'", "ODER BY data DESC");
    $readA->Ler();
    
    // definindo termo antes de executar a query
    $readA->setTermos("categoria = 'internet'");
    $readA->Ler();
    
    // notar a facilidade para alterar o query e exibir valores
    $readA->setTermos("categoria = 'lojas'");
    $readA->Ler();
    
    $readB = clone($readA);
    $readB->setTermos("categoria = 'teste'");
    $readB->Ler();
    
    $readC = clone($readA);
    $readC->setTermos("categoria = 'categoria C'");
    $readC->setTabela("tabela = 'tabela C'");
    $readC->Ler();
    
    // debugando
    var_dump($readA, $readB, $readC);
    
    ?>
</body> 

</html> 
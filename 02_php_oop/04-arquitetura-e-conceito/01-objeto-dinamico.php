<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" type="text/css" />

<body class="container" style="margin-top:100px;">
    <?php
        require('./inc/Config.inc.php');
        
        $cliente = new ObjetoDinamico;
        
        // esse objeto dinamico só pode ser utilizado, conforme a atribuição de parametros abaixo, caso um objeto com os métodos em questão esteja instânciado.
        // ao comentar a linha abaixo, é apresentada falha na atribuição de valores aos parametros do objeto $thierry.
        $thierry = new stdClass();
        
        // atribuição de parametros.
        $thierry->Nome = "thierry rene";
        $thierry->Email = "teste@teste.com";
        // teste de atribuição de parametros que não estão presentes na classe principal ObjetoDinamico.
        // $thierry->CPF = 123123123;
        // $thierry->Teste = "testando atribuição de atributo em objeto dinamico";
        
        // passamos o valor atribuido pela validação.
        $cliente->Novo($thierry);
        
        // atribuimos os valores do objeto dinamo ao objeto instanciado a partir da classe ObjetoDinamico
        // utilizamos o clone, para duplicar o objeto.
        $cliente2 = clone $thierry;
        // alteramos os valores do objeto clonado.
        // note que alteramos os valor após clonar o objeto.
        $cliente2->Nome = "cliente2";
        $cliente2->Email = "teste@teste.com";
        
        // debug
        var_dump($cliente, $thierry, $cliente2);
    ?>
</body>

</html>

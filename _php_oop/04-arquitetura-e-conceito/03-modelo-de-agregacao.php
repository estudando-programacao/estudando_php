<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
</head>
<body class="container" style="margin-top:100px;">
    <?php
        require('./inc/Config.inc.php');
        
        $thierry = new AssociacaoCliente("thierry", "teste@teste.com");
        
        $prophp = new AgregacaoProduto("20", "PRO PHP", 200);
        $wsphp = new AgregacaoProduto("21", "WS PHP", 500);
        $easyphp = new AgregacaoProduto("22", "EASY PHP", 123.12);
        
        // produto feito fora da classe que vamos aceitar, para simular teste
        $outrocurso = new stdClass();
        $outrocurso->Produto = "23";
        $outrocurso->Nome = "Outro Curso";
        $outrocurso->Valor = 232.12;
        
        // var_dump($thierry, $prophp, $wsphp, $easyphp, $outrocurso);
        
        echo "<hr>";
        
        // note que aqui criamos um objeto a partir da classe AgregacaoCarrinho com outro objeto criado (por obrigação, se não é apresentada falha do php, devido a agregação), a partir da classe AssociacaoCliente 
        $carrinho = new AgregacaoCarrinho($thierry);
        $carrinho->Add($prophp);
        $carrinho->Add($wsphp);
        $carrinho->Add($easyphp);
        
        $carrinho->Remove($easyphp);
        
        var_dump($carrinho);
        
    ?>
</body>  
</html>

<!-- https://treinando-php-thierryrene.c9users.io/04-arquitetura-e-conceito/03-modelo-de-agregacao.php -->
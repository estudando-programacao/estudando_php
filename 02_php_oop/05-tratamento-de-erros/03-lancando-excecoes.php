<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript">
        $('document').ready() {
            $('body').css("margin-top", "50px");   
        }
    </script>
</head>
<body class="container">
        
        <?php
        
        // variavel eu definida como null
        $eu = null;
        
        // se $eu é vazio
        if(!$eu):
            // criar um objeto a partir da classe de erros Exception, que utiliza 2 construturoes, o primeiro é a mensagem e o segundo o tipo do erro
            $a = new Exception("Eu é NULL", E_USER_NOTICE);
        endif;
        
        // aqui chamamos o método getMessage para exibir a mensagem de erro que definimos acima
        echo $a->getMessage();
        
        // debug
        var_dump($a);
        
        echo "<hr>";
        
        // tentar
        try {
            // se eu for vazio
            if (!$eu):
                // aqui lancamos uma exceção, ao inves de criar um novo objeto
                throw new Exception("Eu novamente NULL", E_USER_NOTICE);
            endif;
        } catch (Exception $e) {
            // no catch pegamos a mensagem de erro gerada no throw, e aplicamos os métodos na mensagem abaixo, para formatar nossa mensagem de erro.
            echo "<p>Erro #{$e->getCode()}: {$e->getMessage()}<br>";
            echo "<small>{$e->getFile()} na linha {$e->getLine()}</small></p>";
        }
        
        echo "<hr>";
        
        echo $e->xdebug_message;
        
        ?>
        
</body>  
</html>
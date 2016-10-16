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
    
    <p>erros personalizados</p>        
       
        <?php
        
        require ('./_app/Config.inc.php');
        
        trigger_error("Essa é uma mensagem de teste!", E_USER_NOTICE);
        trigger_error("Essa é uma NOTICE!", E_USER_NOTICE);
        trigger_error("Essa é uma WARNING!", E_USER_WARNING);
        
        // teste aplicando erro personalizado com a funcao WSError
        WSError("Esse é um ACCEPT!", WS_ACCEPT);
        // teste aplicado erro personalizado com a funcao PHPErro
        PHPErro(WS_ACCEPT, "Essa é uma excessão!", __FILE__, __LINE__);
        
        try {
            throw new Exception("Essa é mais uma excessão", E_USER_WARNING);
        } catch (Exception $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            WSError($e->getMessage(), $e->getCode());
            WSError($e->getMessage(), WS_ACCEPT);
        }
        
        // mensagem de erro, apresenta die, por isso está declarada por ultimo
        trigger_error("Essa é uma ERROR!", E_USER_ERROR);
        
        // note que hr abaixo não vai ser exibido, pois após o retorno do E_USER_ERROR é aplicado um die();
        echo "<hr>";
        
        ?>
        
</body>  
</html>
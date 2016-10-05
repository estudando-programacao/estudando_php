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
        
        $uso = "1234567891";
        // atribução de valor abaixo ativa "erro no cpf"
        $cpf = "";
        // o valor 500 no $cpf, dispara o erro "formato não é mais utilizado"
        $cpf = "500";
        // igualando os valores das variáveis é apresentada falha "cpf em uso"
        $cpf = $uso;
        
        if(!$cpf):
            // primeira trigger de erro, apenas paresenta mensagem de erro, conforme atributo, e qual o tipo do erro.
            // e_user_notice apenas apresenta uma mensagem de erro.
            trigger_error("Erro no CPF", E_USER_NOTICE);
        // se existir valor no $cpf, então as demais verificações serão executadas
        elseif($cpf == '500'):
            // trigger para informar que o recurso a ser utilizado não está mais operando
            trigger_error("Formato não é mais utilizado", E_USER_DEPRECATED);
        elseif($cpf == $uso):
            // este apresenta um alerta caso o cpf seja igual ao informado
            trigger_error("CPF em uso", E_USER_WARNING);
        // aqui validamos o cpf, com padrão de números e 11 posições.
        elseif(!preg_match('/^[0-9]*$/i', $cpf) && srtlen($cpf) != 11):
            trigger_error("CPF inválido", E_USER_NOTICE);
        else:
            echo "CPF válido.";
        endif;
        
        echo "<br>:)";
        
        // a partir daqui, criamos um handler para erros, e registramos o mesmo para ser utilizado como padrão, por isso a mensagem de erro após o <hr> é diferente da primeira.
        echo "<hr>";
        
        // função para dar override no handler para retorno de emails
        function Erro($Erro, $Mensagem, $Arquivo, $Linha) {
            // aqui é feita a validação ternaria
            $erro = ($Erro == E_USER_ERROR ? 'text-danger' : ($Erro == E_USER_WARNING ? 'text-warning' : 'text-primary'));
            // abaixo, apresentamos a informação de erro, com base na cor aplicada no style do elemento p   
            echo "<p class='{$erro}'>Erro na linha #{$Linha}: {$Mensagem}<br>";
            echo "<small>{$Arquivo}</small></p>";   
            if($Erro == E_USER_ERROR):
                die();
            endif;    
        }
        
        // abaixo determinamos que o php deve utilizar o handler criado (function Erro) para apresentar erros
        set_error_handler("Erro");
        
        if(!$cpf):
            // primeira trigger de erro, apenas paresenta mensagem de erro, conforme atributo, e qual o tipo do erro.
            // e_user_notice apenas apresenta uma mensagem de erro.
            trigger_error("Erro no CPF", E_USER_NOTICE);
        // se existir valor no $cpf, então as demais verificações serão executadas
        elseif($cpf == '500'):
            // trigger para informar que o recurso a ser utilizado não está mais operando
            trigger_error("Formato não é mais utilizado", E_USER_DEPRECATED);
        elseif($cpf == $uso):
            // este apresenta um alerta caso o cpf seja igual ao informado
            trigger_error("CPF em uso", E_USER_WARNING);
        // aqui validamos o cpf, com padrão de números e 11 posições.
        elseif(!preg_match('/^[0-9]*$/i', $cpf) && srtlen($cpf) != 11):
            trigger_error("CPF inválido", E_USER_NOTICE);
        else:
            echo "CPF válido.";
        endif;
        
        // echo "<br>:)";
        
        ?>
        
</body>  
</html>
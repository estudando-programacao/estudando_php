<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
</head>
<body class="container" style="margin-top:100px;">

        <h3>tratamento por existência</h3>
        
        <?php
        // teste de validação por existência, verifica se item existe e se valor corresponde ao tipo validado
        $string = "string";
        // valor inválido apenas para validar teste
        // $string = 10;
        
        // exemplo de validação de string com if else
        if(is_string($string)):
            echo "{$string} é uma string.";
        elseif (!is_string($string)):
            echo "{$string} não é uma string.";
        endif;
        
        echo "<br>";
        
        // validação para verificar se a string está em branco
        if(!empty($string)):
            echo "A string existe e tem valor";
        elseif (isset($string)):
            echo "A string existe mas não tem valor definido";
        endif;
        ?>
        
        <hr>
        
        <h3>tomada de decisão</h3>
        
        <?php
        // este tipo de decisão pode ser muito útil quando você sabe os erros que o sistema deve aprender com base em ações do usuário.
        $decisao = "test@teste.com";
        
        // condição para verificar se valor é de fato um email.
        if(!filter_var($decisao, FILTER_VALIDATE_EMAIL)):
            echo "Email informado é inválido";
        // note que aqui a aplicação toma um die se o email for igual ao informado na condição
        elseif($decisao == "teste@teste.com"):
            die("Email inválido.<br>A aplicação parou.");
        else:
            echo "Email válido";
        endif;
        ?>
        
</body>  
</html>

<!-- https://treinando-php-thierryrene.c9users.io/04-arquitetura-e-conceito/03-modelo-de-agregacao.php -->
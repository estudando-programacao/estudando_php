<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
</head>
<body class="container">
        <!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
        
        <script type="text/javascript">
            // $('h3').addClass('label label-default');
        </script>
        
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
        
        // validação dupla
        // primeiro verifica se string está vazia
        if(!empty($string)):
            echo "A string existe e tem valor";
        // agora verifica se a string é de fato uma string. 
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
            // para a execução do código. 
            die("Email inválido.<br>A aplicação parou.");
        else:
            echo "Email válido";
        endif;
        ?>
        
        <hr>
        
        <h3>retorno de flags</h3>
        
        <?php
        // funcao para avaliar se idade foi preenchida e é um int
        function Idade($Idade = null) {
            // se $Idade estiver vazio
            if(!$Idade):
                return false;
            // se $Idade não for INT
            elseif(!is_int($Idade)):
                return false;
            endif;
            // se as condições forem positivas, o retorno a seguir é apresentado
            return "você nasceu em:" . (date('Y') - $Idade);
        }
        
        // definimos valores nos parametros para teste
        $Idade = "teste";
        // $Idade = 10;
        
        // agora é verificado, através da funcao anterior, se a idade está nula e se é um INT, e então exibimos as condições abaixo.
        if(Idade($Idade)):
            // se positivo, apresentar ano de nascimento
            echo Idade($Idade);
        else:
            // se não, apresentar falha
            echo "Erro, informe um INT idade";
        endif;
        ?>
        
        <hr>
        
        <h3>validação por comparação</h3>
        
        
</body>  
</html>

<!-- https://treinando-php-thierryrene.c9users.io/04-arquitetura-e-conceito/03-modelo-de-agregacao.php -->
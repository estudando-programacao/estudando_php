<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>treinando php</title>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript">
        </script>
    </head>
    <body class="container" style="margin-top: 80px; margin-bottom: 80px;">
        <p class="text-center">PDO - Classes auxiliares</p>
        <?php
        require('./_app/Config.inc.php');

        $check = new Check;
        
        $Email = 'td_matos@msn.com';
        
        if(Check::Email($Email)):
            echo 'Email válido!<hr>';
        else:
            echo 'Email inválido.<hr>';
        endif;        
        
//        var_dump($check);
        echo '<hr>';
        
        $Name = "Testando uma frase com vários acentos, para não apresentar problemas.";
        echo Check::Name($Name) . '<hr>';
        
        $Data = '24/10/1989 13:12:32';
        $Data = '25/10/1945';
        echo Check::Data($Data) . '<hr>';
        
        $String = "Se hoje é o dia das crianças... Ontem eu disse: o dia da criança é o dia da mãe, dos pais, das professoras, mas também é o dia dos animais, sempre que você olha uma criança, há sempre uma figura oculta, que é um cachorro atrás. O que é algo muito importante!";
        echo Check::Words($String, 20, '<br><small>Continue lendo...</small>');
        
        echo '<hr><span class="label label-warning">' . Check::CatByName('artigos') . '</span><hr>';
        echo '<hr><span class="label label-warning">' . Check::CatByName('esportes') . '</span><hr>';
        echo '<hr><span class="label label-warning">' . Check::CatByName('noticias') . '</span><hr>';
//        echo '<hr><span class="label label-warning">' . Check::CatByName('internet') . '</span><hr>';
        
        echo Check::UserOnline();
        
        ?>
        
    </body>
    
</html>

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
<body class="container" style="margin-top: 80px;">
    
    <p class="text-center">PDO - PHP Data Object</p>        
       
    <?php
    require ('./_app/Config.inc.php');
    
    $conn = new Conn;
    
    var_dump($conn);
    ?>
    
</body>  
</html>
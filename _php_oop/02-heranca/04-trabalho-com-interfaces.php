<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" type="text/css" />
<body class="container">
    <?php
        require('./interfaces/IAluno.php');
        require('./inc/Config.inc.php');
        
        
        $aluno = new TrabalhoComInterfaces("thierry rene", "pro php");
        $aluno->Matricular("React");
        $aluno->Formar();
         
         var_dump($aluno);
        
    ?>
</body>

</html>

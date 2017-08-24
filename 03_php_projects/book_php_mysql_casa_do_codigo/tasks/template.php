<?php

include 'tasks.php';

?>

<!doctype html>

<html lang="pt-br">

<head>
    <title>Gerenciador de Tarefas</title>
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8"> 
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="container">
        
        <div class="row">
            
            <div class="col-md-12">
                
                <h1><a href="./">task manager</a></h1>
                
                <br>
                
                <row>
                    <div class="col-md-3">
                        <?php include 'form.php'; ?>
                    </div>
                </row>
                <?php
                
                    if ($exibir_tabela) {
                        include 'table.php';
                    }
                    
                ?>
            </div>
            
        </div>
        
    </div>
    
    <script>
        
    	$('#task').bind('keypress', function(e) {
    		if (e.keyCode == 13 || e.keyCode == 65 || e.keyCode == 66) {
    	    	localStorage.setItem('text_draft', $('#task').val());
    	    	console.log('ok.');
    		}
    	});

    </script>    
</body>

</html>
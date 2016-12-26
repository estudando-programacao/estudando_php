<?php
    session_start();
    
    if (ini_get('register_globals'))
    {
        foreach ($_SESSION as $key=>$value)
        {
            if (isset($GLOBALS[$key]))
                unset($GLOBALS[$key]);
        }
    }
    
?>

<!doctype html>

<html lang="en">

<head>
    <title>Gerenciador de Tarefas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Gerenciador de Tarefas</h1>
                <br>
                <form action="" class="form-inline">
                    <fieldset>
                        <legend>Nova tarefa</legend>
                        <div class="form-group">
                            <label for="">Tarefa: <input type="email" name="task" class="form-control" /></label>
                            <input type="submit" value="Cadastrar" class="form-control" />
                        </div>
                    </fieldset>
                </form>
                
                <?php
                    $lista_tarefas = array();
                    
                    if (isset($_GET['task'])) {
                        $_SESSION['lista_tarefas'][] = $_GET['task'];
                        ?> <script>console.log("<?= $_GET['task'] ?>")</script> <?php
                        // echo "Tarefa informada: " . $_GET['task'];
                    }
                    
                    if (isset($_SESSION['lista_tarefas'])) {
                        $lista_tarefas = $_SESSION['lista_tarefas'];
                    }
                    
                    // var_dump($lista_tarefas);
                ?>
                
                <br>
                <br>
                
                <table class="table">
                    <tr>
                        <th>Tarefas</th>
                    </tr>
                    <?php foreach ($lista_tarefas as $tarefa) : ?> 
                        <tr>
                            <td><?= $tarefa ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                
            </div>
            
        </div>
        
    </div>
    
</body>

</html>

<?php
var_dump($lista_tarefas);
?>


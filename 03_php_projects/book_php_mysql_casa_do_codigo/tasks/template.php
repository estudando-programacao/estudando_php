<!doctype html>

<html lang="pt-br">

<head>
    <title>Gerenciador de Tarefas</title>
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8"> 
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1>Gerenciador de Tarefas</h1>
                
                <br>
                
                <form action="" class="form">
                    
                    <fieldset>
                        
                        <legend>Nova tarefa</legend>
                        
                        <div class="form-group">
                            <label>Tarefa: <input type="text" name="task" class="form-control" /></label>
                            <!--<input type="submit" value="Cadastrar" class="form-control" />-->
                        </div>
                        
                        <div class="form-group">
                            <label>Descrição (Opcional):
                                <textarea name="descricao" class="form-control"></textarea>
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label>Prazo (Opcional):
                                <input type="text" name="prazo" class="form-control">
                            </label>
                        </div>
                        
                        <div class="form-group">
                            
                            <fieldset>
                                
                                <legend>Prioridade</legend>
                                
                                <label>
                                    <input type="radio" name="prioridade" value="Baixa" checked /> Baixa
                                </label>
                                
                                <label>
                                    <input type="radio" name="prioridade" value="Media" /> Média
                                </label>
                                
                                <label>
                                    <input type="radio" name="prioridade" value="Alta" /> Alta 
                                </label>
                                
                            </fieldset>
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Tarefa concluída: 
                                <input type="checkbox" name="concluida" value="Sim" />
                            </label>
                        </div>
                        
                    </fieldset>
                    
                    <input type="submit" value="Cadastrar" class="btn btn-success"/>

                </form>
                
                <br><br>
                
                <table class="table table-bordered">
                    
                    <tr>
                        <th>Tarefa</th>
                        <th>Descrição</th>
                        <th>Prazo</th>
                        <th>Prioridade</th>
                        <th>Concluída</th>
                    </tr>
                    
                    <?php foreach ($_SESSION['lista_tarefas'] as $tarefa) { ?> 
                    
                        <tr>
                            <td><?php echo $tarefa['task']; ?></td>
                            <td><?php echo $tarefa['descricao']; ?></td>
                            <td><?php echo $tarefa['prazo']; ?></td>
                            <td><?php echo $tarefa['prioridade']; ?></td>
                            <td><?php echo $tarefa['concluida']; ?></td>
                        </tr>
                        
                    <?php } ?>
                    
                </table>
                
            </div>
            
        </div>
        
    </div>
    
</body>

</html>
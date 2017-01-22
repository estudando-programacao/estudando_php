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
                
                <h1><a href="tasks.php">Gerenciador de Tarefas</a></h1>
                
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
                                <input type="date" name="prazo" class="form-control">
                            </label>
                        </div>
                        
                        <div class="form-group">
                            
                            <fieldset>
                                
                                <legend>Prioridade</legend>
                                
                                <label>
                                    <input type="radio" name="prioridade" value="1" checked /> Baixa
                                </label>
                                
                                <label>
                                    <input type="radio" name="prioridade" value="2" /> Média
                                </label>
                                
                                <label>
                                    <input type="radio" name="prioridade" value="3" /> Alta 
                                </label>
                                
                            </fieldset>
                            
                        </div>
                        
                        <div class="form-group">
                            <fieldset>
                                
                                <legend>Tarefa concluída:</legend>
                                
                                <label>Sim 
                                    <input type="radio" name="concluida" value="1"/>
                                </label>
                                
                                <label>Não
                                    <input type="radio" name="concluida" value="0"/>
                                </label>
                            
                            </fieldset>
                        
                        </div>
                        
                    </fieldset>
                    
                    <input type="submit" value="Cadastrar" class="btn btn-success"/>

                </form>
                
                <br><br>
                
                <table class="table table-bordered table-hover">
                    
                    <tr>
                        <th>ID</th>
                        <th>Tarefa</th>
                        <th>Descrição</th>
                        <th>Prazo</th>
                        <th>Prioridade</th>
                        <th>Concluída</th>
                    </tr>
                    
                    <?php foreach ($lista_tarefas as $tarefa) { ?> 
                    
                        <tr>
                            <td><?php echo $tarefa['id']; ?></td>
                            <td><?php echo $tarefa['task']; ?></td>
                            <td><?php echo $tarefa['descricao']; ?></td>
                            <td style="width: 10%;"><?php echo $tarefa['prazo']; ?></td>
                            <td>
                                <?php echo traduz_prioridades($tarefa['prioridade']); ?>
                            </td>
                            <td>
                                <?php 
                                    if ($tarefa['concluida'] == 1) { 
                                        echo "<span class='label label-success'>Concluída</span>"; 
                                    } else {
                                        echo "<span class='label label-warning'>Não concluída</span>";
                                    }
                                ?>
                            </td>
                        </tr>
                        
                    <?php } ?>
                    
                </table>
                
            </div>
            
        </div>
        
    </div>
    
</body>

</html>
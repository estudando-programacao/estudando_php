<br><br>
                
<table class="table table-bordered table-hover" style="text-align:center;">
    
    <tr>
        <th>ID</th>
        <th>Tarefa</th>
        <th>Descrição</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluída</th>
        <th>Editar/Apagar</th>
    </tr>
    
    <?php
    
    foreach ($lista_tarefas as $tarefa): ?> 
        
        <tr>
            <td><?php echo $tarefa['id']; ?></td>
            <td><?php echo $tarefa['task']; ?></td>
            <td><?php echo $tarefa['descricao']; ?></td>
            <td style="width: 10%;"><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
            <td>
                <?php echo traduz_prioridades($tarefa['prioridade']); ?>
            </td>
            <td>
                <?php echo traduz_tarefa_concluida($tarefa['concluida']); ?>
            </td>
            <td><a href="edit_task.php?id=<?php echo $tarefa['id']; ?>">Editar</a> / <a href="delete_task.php?id=<?php echo $tarefa['id']; ?>">Apagar</a></td>
        </tr>
        
    <?php endforeach; ?>
    
</table>
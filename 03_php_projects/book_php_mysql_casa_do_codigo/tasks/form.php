<form action="" class="form well">
    
    <input type="hidden" name="id" class="form-control" value="<?php echo $tarefa['id']; ?>"/>
    
    <fieldset>
        
        <legend>Nova tarefa</legend>
        
        <div class="form-group">
            <label>Tarefa: 
                <input type="text" name="task" class="form-control" value="<?php echo $tarefa['task']; ?>" />
            </label>
        </div>
        
        <div class="form-group">
            <label>Descrição (Opcional):
                <textarea name="descricao" class="form-control" value="<?php echo $tarefa['descricao']; ?>"></textarea>
            </label>
        </div>
        
        <div class="form-group">
            <label>Prazo (Opcional):
                <input type="date" name="prazo" class="form-control" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>">
            </label>
        </div>
        
        <div class="form-group">
            
            <fieldset>
                
                <legend>Prioridade</legend>
                
                <label>
                    <input type="radio" name="prioridade" value="<?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?>" /> Baixa
                </label>
                
                <label>
                    <input type="radio" name="prioridade" value="<?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?>" /> Média
                </label>
                
                <label>
                    <input type="radio" name="prioridade" value="<?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?>" /> Alta 
                </label>
                
            </fieldset>
            
        </div>
        
        <div class="form-group">
            <fieldset>
                
                <legend>Tarefa concluída:</legend>
                
                <label>Sim 
                    <input type="checkbox" name="concluida" value="<?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?>"/>
                </label>
            
            </fieldset>
        
        </div>
        
    </fieldset>
    
    <input type="submit" value="Cadastrar" class="btn btn-success"/>
        
</form>
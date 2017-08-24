<?php

    session_start();
    
    include 'bd.php';
    include 'ajudantes.php';
    
    $exibir_tabela = true;
    
    // exemplo de validação com confirmação JS
    // if (isset($_GET['task']) && $_GET['task'] != '') {
    //     $_SESSION['lista_tarefas'][] = $_GET['task'];
        ?> <script>// console.log("<?php // $_GET['task'] ?>")</script> <?php
    //     // echo "Tarefa informada: " . $_GET['task'];
    // }
    
    if (isset($_GET['task']) && $_GET['task'] != '') {
        
        $tarefa = array();
        
        $tarefa['task'] = $_GET['task'];
        
        if (isset($_GET['descricao'])) {
            $tarefa['descricao'] = $_GET['descricao'];
        } else {
            $tarefa['descricao'] = '';
            $log->addWarning('[DESCRIÇÃO NÃO CADASTRADA]');
        }
    
        if (isset($_GET['prazo'])) {
            $tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
        } else {
            $tarefa['prazo'] = '';
        }
        
        $tarefa['prioridade'] = $_GET['prioridade'];
        
        if (isset($_GET['concluida'])) {
            $tarefa['concluida'] = $_GET['concluida'];
        } else {
            $tarefa['concluida'] = '';
        }
        
        gravar_tarefa($conexao, $tarefa);
        
    }
                            
    // if (isset($_SESSION['lista_tarefas'])) {
    //     $lista_tarefas = $_SESSION['lista_tarefas'];
    // } else {
    //     $lista_tarefas = array();
    // }
    
    $lista_tarefas = buscar_tarefas($conexao);



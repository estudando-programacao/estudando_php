<?php

    session_start();
    
    include 'bd.php';
    include 'ajudantes.php';
    
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
            $log->addInfo('[DESCRIÇÃO CADASTRADA]');
        } else {
            $tarefa['descricao'] = '';
            $log->addWarning('[DESCRIÇÃO NÃO CADASTRADA]');
        }
    
        if (isset($_GET['prazo'])) {
            $tarefa['prazo'] = $_GET['prazo'];
            $log->addInfo('[PRAZO CADASTRADO]');
        } else {
            $tarefa['prazo'] = '';
            $log->addWarning('[PRAZO NÃO CADASTRADO]');
        }
        
        $tarefa['prioridade'] = $_GET['prioridade'];
        $log->addInfo('[PRIORIDADE CADASTRADA]');
        
        if (isset($_GET['concluida'])) {
            $tarefa['concluida'] = $_GET['concluida'];
            $log->addInfo('[TAREFA CONCLUIDA MARCADA]');
        } else {
            $tarefa['concluida'] = '';
            $log->addWarning('[TAREFA CONCLUIDA NÃO MARCADA]');
        }
        
        gravar_tarefa($conexao, $tarefa);
        
        $log->addInfo('----------------------------------');
        
        // var_dump($tarefa);
        // var_dump($_SESSION);
    }
                            
    // if (isset($_SESSION['lista_tarefas'])) {
    //     $lista_tarefas = $_SESSION['lista_tarefas'];
    // } else {
    //     $lista_tarefas = array();
    // }
    
    $lista_tarefas = buscar_tarefas($conexao);
        
    include 'template.php';



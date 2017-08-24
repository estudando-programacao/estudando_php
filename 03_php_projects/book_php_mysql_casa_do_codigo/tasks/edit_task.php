<?php

session_start();

include 'bd.php';
include 'ajudantes.php';

$exibir_tabela = false;

if ( isset($_GET['task']) && $_GET['task'] != '' ) {
        
    $tarefa = array();
    
    $tarfe['id'] = $_GET['id'];
    
    $tarefa['task'] = $_GET['task'];
    
    if ( isset($_GET['descricao'] )) {
        $tarefa['descricao'] = $_GET['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }
    
    if ( isset($_GET['prazo'] )) {
        $tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
    } else {
        $tarefa['prazo'] = '';
    }
    
    $tarefa['prioridade'] = $_GET['prioridade'];
    
    if (isset($_GET['concluida'])) {
        $tarefa['concluida'] = 1;
    } else {
        $tarefa['concluida'] = 0;
    }
    
    editar_tarefa($conexao, $tarefa);
}

$tarefa = buscar_tarefa($conexão, $_GET['id']);

include 'template.php';


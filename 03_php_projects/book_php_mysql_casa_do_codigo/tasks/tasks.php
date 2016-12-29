<?php

require_once ('../../testando_composer/vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger($_SERVER['SERVER_ADDR']);
$log->pushHandler(new StreamHandler('log/your.log', Logger::INFO));

// require 'server_test.php';
    
    session_start();
    
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
        
        $_SESSION['lista_tarefas'][] = $tarefa;
        
        $log->addInfo('[CRIADA SESSÃO COM VALORES]');
        $log->addInfo('----------------------------------');
        
        // var_dump($tarefa);
        // var_dump($_SESSION);
    }
                            
    // if (isset($_SESSION['lista_tarefas'])) {
    //     $lista_tarefas = $_SESSION['lista_tarefas'];
    // }
    
    include 'template.php';



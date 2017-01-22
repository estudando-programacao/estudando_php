<?php

// require 'server_test.php';

require_once '../../testando_composer/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// registro de logs
$log = new Logger($_SERVER['SERVER_ADDR']);
$log->pushHandler(new StreamHandler('log/your.log', Logger::INFO));

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'tarefas_phpbook_cc';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "Problema para se conectar ao banco MySQL. Verifique o código.";
    $log->addError('FALHA NA CONEXÃO COM O BANCO. VERIFICAR DADOS.');
    die();
}

$log->addInfo('CONEXÃO COM BD OK!');

function buscar_tarefas($conexao) {

    $sqlBusca = 'SELECT * FROM tarefas ORDER BY id ASC';

    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa) {

    $sqlGravar = "
                INSERT INTO tarefas
                (task, descricao, prazo, prioridade, concluida)
                VALUES
                (
                    '{$tarefa['task']}',
                    '{$tarefa['descricao']}',
                    '{$tarefa['prazo']}',
                    {$tarefa['prioridade']},
                    {$tarefa['concluida']}
                )";

    mysqli_query($conexao, $sqlGravar);
}
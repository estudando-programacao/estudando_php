<?php

function traduz_data_para_exibir($data) {
    
    if ($data == '' OR $data == '0000-00-00') {
        return '';
    }
    
    $dados = explode('-', $data);
    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
    return $data_exibir;
}

function traduz_data_para_banco($data) {
    $dados = explode('/', $data);
    $data_mysql = "{$dados[0]}-{$dados[1]}-{$dados[2]}";
    return $data_mysql;
}

function traduz_prioridades($codigo) {
    
    $prioridade = '';
    
    switch($codigo) {
        case 1:
            $prioridade = "<span class='label label-info'>Baixa</span>";
            break;
        case 2:
            $prioridade = "<span class='label label-warning'>Média</span>";
            break;
        case 3;
            $prioridade = "<span class='label label-danger'>Alta</span>";
            break;
    }
    
    return $prioridade;
}

function traduz_tarefa_concluida($tarefa) {
    if ($tarefa == 1) {
        return "<span class='label label-success'>Sim</span>";
    } else {
        return "<span class='label label-danger'>Nâo</span>";
    }
}


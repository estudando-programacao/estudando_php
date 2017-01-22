<?php

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


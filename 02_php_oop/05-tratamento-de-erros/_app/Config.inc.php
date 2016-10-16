<?php

    // CONFIGURACOES DO SITE ####################
    // AUTOLOAD DE CLASSES ######################
    function __autoload($Class) { 
        
        $dirName = 'class';
        
        if (file_exists("{$dirName}/{$Class}.class.php")):
            require_once("{$dirName}/{$Class}.class.php");
            // echo "O arquivo Config.inc.class existe.<hr>";            
        else:
            echo "Erro ao incluir.";
        endif;
    }
    
    // CONFIGURACOES DO SITE ####################
    // CSS constants :: Mensagens de Erro #######
    
    // aqui estamos definindo que as constantes de erro devem assumir os estilos (segunda aspas) definidos no arquivo .css
    define('WS_ACCEPT', 'alert alert-success');
    define('WS_INFOR', 'alert alert-info');
    define('WS_ALERT', 'alert alert-warning');
    define('WS_ERROR', 'alert alert-danger');
    
    // WSErro :: exibe erros lançados :: front
    function WSError($ErrMsg, $ErrNo, $ErrDie = null) {
        $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : 
                    ($ErrNo == E_USER_WARNING ? WS_ALERT : 
                    ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)
        ));
        
        echo "<p class='{$CssClass}'>{$ErrMsg}<span classs='ajax_close'>";
        
        if($ErrDie):
            die();
        endif;
    }
    
    // PHPErro :: personaliza gatilho do PHP
    function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
        $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : 
                    ($ErrNo == E_USER_WARNING ? WS_ALERT : 
                    ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)
        ));
        echo "<p class='trigger {$CssClass}'>";
        echo "<b>Erro na linha: {$ErrLine} :: </b> {$ErrMsg}<br>";
        echo "<small>{$ErrFile}</small>";
        echo "<span class='ajax_close'><span></p>";
        
        if ($ErrNo == E_USER_ERROR):
            die();
        endif;
        
    }
    
    set_error_handler('PHPErro');
    
?>
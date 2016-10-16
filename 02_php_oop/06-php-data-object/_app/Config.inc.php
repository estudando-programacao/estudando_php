<?php

    // CONFIGURACOES DO SITE ####################

    // CONFIGURACOES DO BANCO DE DADOS ##########

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBSA', 'wsphp');

    // AUTOLOAD DE CLASSES ######################

    // function __autoload($Class) {

    //     $dirName = 'Conn';

    //     if (file_exists("{$dirName}/{$Class}.class.php")):
    //         require_once("{$dirName}/{$Class}.class.php");
    //         echo "O arquivo Config.inc.class existe.<hr>";
    //     else:
    //         echo "Erro ao incluir.";
    //     endif;
    // }

    function __autoload($Class) {
        $cDir = array('Conn');
        $iDir = null;

        foreach($cDir as $dirName):
            if(!$iDir && file_exists(__DIR__ . "\\{$dirName}\\{$Class}.class.php") && !is_dir(__DIR__ . "\\{$dirName}\\{$Class}.class.php")):
                include_once(__DIR__ . "\\{$dirName}\\{$Class}.class.php");
                $iDir = true;
            endif;
        endforeach;

        if(!$iDir):
            trigger_error("Não foi possível incluir {$Class}.class.php", E_USER_ERROR);
            die;
        endif;
    }

    // CSS constants :: Mensagens de Erro #######

    // aqui estamos definindo que as constantes de erro devem assumir os estilos (segunda aspas) definidos no arquivo .css
    define('WS_ACCEPT', 'alert alert-success');
    define('WS_INFOR', 'alert alert-info');
    define('WS_ALERT', 'alert alert-warning');
    define('WS_ERROR', 'alert alert-danger');

    // // WSErro :: exibe erros lançados :: front
    // function WSError($ErrMsg, $ErrNo, $ErrDie = null) {
    //     $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR :
    //                 ($ErrNo == E_USER_WARNING ? WS_ALERT :
    //                 ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)
    //     ));

    //     echo "<p class='{$CssClass}'>{$ErrMsg}<span classs='ajax_close'>";

    //     if($ErrDie):
    //         die();
    //     endif;
    // }

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

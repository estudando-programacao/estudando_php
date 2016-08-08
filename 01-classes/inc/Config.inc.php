<?php

    function __autoload($Class) { 
        
        $dirName = 'class';
        
        if (file_exists("{$dirName}/{$Class}.class.php")):
            require_once("{$dirName}/{$Class}.class.php");
            echo "O arquivo Config.inc.class existe.";
            
        else:
            echo "Erro ao incluir.";
        endif;
        
    }
?>
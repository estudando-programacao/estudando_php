<?php

class ClassesObjetos {
    
    var $Classe;
    var $Funcao;
    
    function getClass($Class, $Funcao) {
        echo "<p> A classe {$Class} tem a função de {$Funcao}.";
    }
    
    function verClass() {
        echo '<pre>';
            print_r($this);
        echo '</pre>';
    }
}
<?php

class ResolucaoDeEscopoDigital extends ResolucaoDeEscopo {
    
    public static $Digital;
    
    function __CONSTRUCT($Produto, $Valor) {
        parent::__CONSTRUCT($Produto, $Valor);
    }
    
    public function Vender() {
        self::$Digital += 1;
        parent::Vender();
    }
    
}
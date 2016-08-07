<?php
    
    class AbstracaoCP extends AbstracaoCC {
        
        public $rendimento;
        
        function __CONSTRUCT($Cliente, $Saldo) {
            parent::__CONSTRUCT($Cliente, $Saldo, 0);
            $this->Conta = "Conta Poupança";
            $this->Rendimento = 1.7;
    }

?>
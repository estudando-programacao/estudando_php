<?php   

    class AbstracaoCC extends Abstracao {
        
        public  $Limite;
        
        function __CONSTRUCT($Cliente, $Saldo, $Limite) {
            parent::__CONSTRUCT($Cliente, $Saldo);
            $this->Conta = "Conta corrente";
            $this->Limite = (float) $Limite;
        }
    }

?>
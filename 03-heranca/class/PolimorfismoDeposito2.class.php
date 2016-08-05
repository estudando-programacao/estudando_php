<?php

class PolimorfismoDeposito2 extends Polimorfismo {
    
    public $Desconto2;

    function __construct($Produto, $Valor) {
        parent:: __construct($Produto, $Valor);
        $this->Desconto2 = 50;
        $this->Metodo = "Débito automático";
    }

    public function setDesconto2($Desconto2) {
        $this->Desconto2 = $Desconto2;
    }

    public function Pagar2() {
        $this->Valor = ($this->Valor / 100) * 100 - $this->Desconto2;
        parent::Pagar();
    }
}

?>
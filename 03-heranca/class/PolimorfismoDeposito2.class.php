<?php

class PolimorfismoDeposito2 extends Polimorfismo {
    
    public $Desconto2;

    function __construct($Produto, $Valor) {
        parent:: __construct($Produto, $Valor);
        $this->Desconto = 100;
        $this->Metodo = "Débito automático";
    }
}

?>
<?php

    class Polimorfismo {
    
    public $Produto;
    public $Valor;
    public $Metodo;
    
    function __construct($Produto, $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
        $this->Metodo = "Boleto";
    }

    public function Paga() {
        
    }
    
    public function FunctionName($value='')
    {
        return "R$ " . numer_format($Valor, '2', '.');
    }
    }

?>

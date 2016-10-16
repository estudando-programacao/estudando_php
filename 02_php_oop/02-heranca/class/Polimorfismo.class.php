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

    public function Pagar() {
        echo "Voce pagou <b>{$this->Real($this->Valor)}</b> pelo produto <b>{$this->Produto}</b><br>";
        echo "<small style='color:crimson'>Pagamento efetuado via {$this->Metodo}.</small><br>";
    }
    
    public function Real($Valor) {
        return "R$ " . number_format($Valor, '2', '.', ',');
    }
    
}

?>

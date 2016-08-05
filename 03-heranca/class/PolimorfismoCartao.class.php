
<?php
    class PolimorfismoCartao extends Polimorfismo {
        
        public $Juros;
        public $Encargos;
        public $Parcelas;
        public $NumParcelas;

        function __construct($Produto, $Valor) {
            param::__construct($Produto, $Valor);
            $this->Juros = 1.17;
            $this->Metodo = "Cartão de Crédito";
        }
    }
?>
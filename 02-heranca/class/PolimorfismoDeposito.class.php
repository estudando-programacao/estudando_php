<?php

    class PolimorfismoDeposito extends Polimorfismo {

        public $Desconto;

        function __construct($Produto, $Valor) {
            // um construtor herdado deve ser adicionado logo apos a declaração do construtor, conforme abaixo
            parent::__construct($Produto, $Valor);
            // abaixo efetuamos alterações nos parametros da classe pai
            $this->Desconto = 15;
            $this->Metodo = 'Depósito';
        }

        // metodo para definir e aplicar o desconto
        public function setDesconto($Desconto) {
            $this->Desconto = $Desconto;
        }

        public function Pagar() {
            $this->Valor = ($this->Valor / 100) * 100 - $this->Desconto;
            parent::Pagar();
        }
    }
?>
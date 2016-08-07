<?php
    
    class AbstracaoCP extends AbstracaoCC {
        
        public $rendimento;
        
        function __CONSTRUCT($Cliente, $Saldo) {
            parent::__CONSTRUCT($Cliente, $Saldo, 0);
            $this->Conta = "Conta Poupança";
            $this->Rendimento = 1.7;
        }
        
        public function Depositar($Valor) {
            $Juro = $Valor * ($this->Rendimento / 100);
            $Deposito = $Valor + $Juro;
            parent::Depositar($Deposito);
            echo "Valor do depósito: {$this->Real($Valor)} || Rendimentos {$this->Real($Juro)}";
        }
    }
<?php   

    class AbstracaoCC extends Abstracao {
        
        public $Limite;
        
        function __CONSTRUCT($Cliente, $Saldo, $Limite) {
            parent::__CONSTRUCT($Cliente, $Saldo);
            $this->Conta = "Conta corrente";
            $this->Limite = (float) $Limite;
        }
        
        final public function Sacar($Valor) {
            if($this->Saldo + $this->Limite >= (float) $Valor):
                parent::Sacar($Valor);
            else:
                echo "{$this->Conta}: Erro, saldo ({$this->Real($Valor)}) indisponível.<br><br>";
            endif;
        }
        
        final public function Transferir($Valor, $Destino) {
            if($this->Saldo + $this->Limite >= (float) $Valor):
                parent::Transferir($Valor, $Destino);
            else:
                echo "{$this->Conta}: Erro ao transferir ({$this->Real($Valor)}). Saldo indisponível.<br>";
            endif;
        }
        
        public function VerSaldo() {
            parent::Extrato();
        }
    }

?>
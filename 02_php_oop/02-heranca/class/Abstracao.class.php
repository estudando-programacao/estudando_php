<?php  

abstract class Abstracao {
    public $Cliente;
    public $Conta;
    public $Saldo;
    
    public function __construct($Cliente, $Saldo) {
        $this->Cliente = $Cliente;
        $this->Saldo = $this->Real($Saldo);
    }
    
    public function Depositar($Valor) {
        $this->Saldo += (float) $Valor;
        echo "{$this->Conta}: Deposito de {$this->Real($Valor)} efetuado com sucesso!<br>";
    }
    
    public function Sacar($Valor) {
        $this->Saldo -= (float) $Valor;
        echo "{$this->Conta}: Saque de {$this->Real($Valor)} efetuado com sucesso!<br>";
    }
    
    public function Transferir($Valor, $Destino) {
        if ($this === $Destino):
            echo "Você não pode transferir valores para a mesma conta.";
        else:
            echo "<hr>";
            $this->Sacar($Valor);
            $this->Depositar($Valor);
            echo "{$this->Conta}: transferencia de {$this->Real($Valor)} efetuada com sucesso. De {$this->Cliente} para {$Destino->Cliente}.";
            echo "<hr>";
        endif;
    }
    
    public function Extrato() {
        echo "<hr><hr>Olá {$this->Cliente}.<br> Seu saldo em {$this->Conta} é de {$this->Saldo}.<hr>";
    }
    
    public function Real($Valor) {
        return "R$ " . number_format($Valor, '2', '.', ',');
    }
    
    abstract public function VerSaldo();

}


?>
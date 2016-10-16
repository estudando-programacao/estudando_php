<?php

class ResolucaoDeEscopo {
    public $Produto;
    public $Valor;
    public static $Vendas;
    public static $Lucros;
    
    public function __CONSTRUCT($Produto, $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
    }
    
    public function Vender() {
        // self:: -> referencia ao proprio atributo estático
        self::$Vendas += 1;
        self::$Lucros = $this->Valor * self::$Vendas;
        echo "<span class='label label-success'>{$this->Produto} vendido por R$ {$this->Valor}</span><br>";
    }
    
    public static function Relatorio() {
        echo "<hr>";
            echo "<span class='label label-danger'>Este produto vendeu " . self::$Vendas . " unidade(s)</span><br><span class='label label-warning'>Total de R$" . self::$Lucros ."</span>";
        echo "<hr>";
    }
    
}
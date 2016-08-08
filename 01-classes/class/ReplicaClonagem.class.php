<?php

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

class ReplicaClonagem {
    var $Tabela;
    var $Termos;
    var $AddQuery;
    var $Query;
    
    // difinindo construtor
    function __construct($Tabela, $Termos, $AddQuery) {
        $this->Tabela = $Tabela;
        $this->Termos = $Termos;
        $this->AddQuery = $AddQuery;
    }
    
    // definindo metódo para atribuir termo posteriormente
    function setTermos($Termos) {
        $this->Termos = $Termos;
    }
    
    function setTabela($Tabela) {
        $this->Tabela = $Tabela;
    }
    
    // function setQuery($Query) {
    //     $this->Query = $Query;    
    // }
    
    // metodo para executar a query
    function Ler() {
        $this->Query = "SELECT * FROM {$this->Tabela} WHERE {$this->Termos} {$this->AddQuery}";
        echo "{$this->Query}<hr>";
    }
}

?>
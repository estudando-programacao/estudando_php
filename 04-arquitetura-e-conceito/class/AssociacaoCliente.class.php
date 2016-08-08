<?php
 
class AssociacaoCliente { 
    private $Cliente;
    public $Nome;
    public $Email;
    
    function __construct($Nome, $Email) {
        $this->Cliente = md5($Nome);
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
    // metodo para interagir com parametro cliente
    public function getCliente() {
        return $this->Cliente;
    }
} 
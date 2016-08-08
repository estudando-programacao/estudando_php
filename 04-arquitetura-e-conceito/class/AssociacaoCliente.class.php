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
     
    // metodo para interagir com parametro Cliente
    public function getNome() {
        return $this->Nome;
    }
    
    // metodo para interagir com Email
    public function getEmail() {
        return $this->Email;
    }
    
    // metodo para interagir com Cliente
    public function getCliente() {
        return $this->Cliente;
    }
} 
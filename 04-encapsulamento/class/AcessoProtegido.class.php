<?php

class AcessoProtegido {
    public $Nome;
    protected $Email;
    
    public function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }
    
    public function setEmail($Email) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die("Email inválido");
        else:
            $this->Email = $Email;
        endif;
    }
    
    protected function setNome($Nome) {
        $this->Nome = $Nome;
    }
    
    
}
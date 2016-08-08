<?php

class AcessoPublico {
    public $Nome;
    public $Email;
    
    function __CONSTRUCT($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
    public function setEmail($Email) {
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)):
        else:
            $this->Email = $Email;
        endif;
    }
}
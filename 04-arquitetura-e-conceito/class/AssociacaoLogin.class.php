<?php

class AssociacaoLogin { 
    
    // definismos o $Cliente como private para deixar o código mais coeso
    private $Cliente;
    private $Login;
    
    function __construct($Nome) {
        if(is_object($Cliente)): 
            $this->Cliente = $Cliente;
            $this->Login = true;
        else:
            die("Erro ao logar!");
        endif;
    }
    
    // definmos um método para interagir com o parametro cliente
    public function getCliente() {
        return $this->Cliente;
    }
    
    // note que para validar utilizar a função, fazemos referência ao objeto, no arquivo view. Esse esquema é definido como associação. Note também que não podemos alterar diretamente
    public function getLogin() {
        return $this->Login;
    }
    
} 
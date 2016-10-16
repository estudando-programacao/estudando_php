<?php

class ComposicaoUsuario {
    public $Nome;
    public $Email;
    private $Endereco;
    
    // obrigamos a criação do objeto dessa maneira
    function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
    // note o conceito de compisção sendo aplicado, ao declararmos um objeto dentro de uma classe e em seguida utilizando seus métodos
    public function CadastrarEndereco($Cidade, $Estado) {
        $this->Endereco = new ComposicaoEndereco($Cidade, $Estado);
    }
    
    public function getEndereco() {
        return $this->Endereco;
    }
    
    public function getNome() {
        return $this->Nome;
    }
    
    public function getEmail() {
        return $this->Email;
    }

}
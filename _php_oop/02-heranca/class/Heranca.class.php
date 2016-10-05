<?php

class Heranca {
    
    public $Nome;
    public $Idade;
    public $Formacao;
    
    function __construct($Nome, $Idade) {
        $this->Nome = (string) $Nome;
        $this->Idade = (int) $Idade;
        $this->Formacao = array();
    }
    
    public function Envelhecer() {
        $this->Idade += 1;
    }
    
    public function Formar($Cursos) {
        $this->Formacao[] = (string) $Cursos;
    }
    
    public function VerPessoa() {
        $Formacao = implode(", ", $this->Formacao);
        echo "{$this->Nome} tem {$this->Idade} anos de idade e é formado em: {$Formacao}.<hr>";
    }

}

?>
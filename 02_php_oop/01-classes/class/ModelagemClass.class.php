<?php

class ModelagemClass {

    public $Nome;
    public $Idade;
    public $Profissao;
    public $ContaSalario;
    
    function __construct($Nome, $Idade, $Profissao, $ContaSalario) {
        $this->Nome = (string) $Nome;
        $this->Idade = (int) $Idade;
        $this->Profissao = (string) $Profissao;
        $this->ContaSalario = (float) $ContaSalario;
    }
    
    public function DarEcho($Mensagem) {
        echo "<p>{$Mensagem}</p>";
    }
    
    public function Trabalhar($Trabalho, $Valor) {
        $this->ContaSalario += $Valor;
        $this->DarEcho("{$this->Nome} desenvolveu um {$Trabalho} e recebeu {$this->toReal($Valor)}.");
    }
    
    public function setNome($Nome) {
        $this->Nome = $Nome;
        
    }
    
    public function setIdade($Idade) {
        $this->Idade = $Idade;
    }
    
    public function setProfissao($Profissao) {
        $this->Profissao = $Profissao;
    }
    
    public function setContaSalario($ContaSalario) {
        $this->ContaSalario = $ContaSalario;
    }
    
    public function ToReal($Valor) {
        return number_format($Valor, '2', '.', ',');
    }
    
    
}

?>
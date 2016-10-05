<?php

class TrabalhoComInterfaces implements IAluno {
    public $Aluno;
    public $Curso;
    public $Formacao;
    
    function __construct($Aluno, $Curso) {
        $this->Aluno = $Aluno;
        $this->Curso = $Curso;
        $this->Formacao = array();
    }
    
    public function Matricular($Curso) {
        $this->Curso = $Curso;
        echo "{$this->Aluno} foi matriculado no curso {$this->Curso}.<br><hr>";
    }
    
    public function Formar() {
        $this->Formacao[] = $this->Curso; 
        echo "O aluno {$this->Aluno} se formou no curso {$this->Curso}<br><hr>.";
    }
    
}
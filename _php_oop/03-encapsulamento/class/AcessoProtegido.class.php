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
    
    // classe filha pode utilziar o método porém não pode alterar.
    // também é determinado que ela é uma classe final, pois sua utilidade está bem definida nesta função, não havendo a necessidade de ser alterada pelas classes filhas.
    final protected function setNome($Nome) {
        $this->Nome = $Nome;
    }
}

class AcessoProtegidoFilha extends AcessoProtegido {
    
    protected $CPF;
    
    public function AddCpf($Nome, $Cpf) {
        // referencia ao metodo pai. note a similaridade do metodo e seu atributo.
        // note também que utilizamos o método pai na CLASSE FILHA, pois para o objeto, mesmo sendo herdado, ele fica restrito (conforme teste comentado no arquivo 02-acesso-protegido.php).
        parent::setNome($Nome);
        $this->CPF = $Cpf;
    }
    
}
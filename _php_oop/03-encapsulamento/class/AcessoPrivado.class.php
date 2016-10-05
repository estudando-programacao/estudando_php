<?php

class AcessoPrivado {
    private $Nome;
    private $Email;
    private $CPF;
    
    function __CONSTRUCT($Nome, $Email, $CPF) {
        // testando validação com atributo incorreto para simular falha.
        //$this->setNome(123123);
        $this->setNome("thierry rene matos");
        
    }
    
    // função de validação do $Nome / string
    public function setNome($Nome) {
        // aqui validamos se o atributo $Nome realmente é uma string.
        if ($Nome && is_string($Nome)):
            // se sim, é artibuido ao parametro.
            $this->Nome = $Nome;
        else:
            // se não, apresentamos mensagem de erro.
            die("<hr><span class='label label-danger'>Erro no nome</span><hr>");
        endif;
    }
    
    // funcao para validar email
    public function setEmail($Email) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die("<span class='label label-danger'>Email inválido</span>");
        else:
            $this->Email = $Email;
        endif;
    }
    
    // funcao para validar CPF
    public function setCpf($Cpf) {
        // preg_match valida o campo dentro do exigido no parametro, apenas numero de 0-9 devem ser aceitos, além de 11 numeros obrigatorios.
        if (preg_match("/[0-9]/i", $Cpf) && strlen(11)):
            $this->CPF = $Cpf;
        else:
            die("<span class='label label-default'>CPF inválido</span>");
        endif;
    }
}

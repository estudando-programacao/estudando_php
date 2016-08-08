<?php

class ObjetoDinamico {
    public $Nome;
    private $Email;
    
    public function Novo($Cliente) {
        // validação de objetos. se o parametro passado for um objeto, os valores são atribuídos.
        // essa validação obriga a utilizar utilização de objetos.
        if(is_object($Cliente)):
            $this->Nome = $Cliente->Nome;
            $this->Email = $Email->Email;
        else:
            die("Erro, informe um objeto.");
        endif;
    }
}
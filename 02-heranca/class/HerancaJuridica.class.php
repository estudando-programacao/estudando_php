<?php

class HerancaJuridica extends Heranca {

    public $Empresa;
    public $Funcionarios;

    // funcao construct para chamar dados iniciais da classe pai
    function __CONSTRUCT($Nome, $Idade, $Empresa) {
        // parent:: se refere diretamente ao elemento construtor da classe pai
        parent::__CONSTRUCT($Nome, $Idade);
        // atribuimos a variável $Empresa ao parametro $Empresa
        $this->Empresa = $Empresa;
    }

    // metodo para tratar o parametro funcionario
    public function Contratar($Pessoa) {
        echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa}<hr>";
        $this->Funcionarios += 1;
    }
    
    public function VerEmpresa() {
        echo "{$this->Empresa} foi fundada por {$this->Nome} e tem {$this->Funcionarios} funcionários!<br><small style='color:cornflowerblue'>";
            parent::VerPessoa();
        echo "</small>";
    }
}

?>
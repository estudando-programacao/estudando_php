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

    public function Contratar($Pessoa) {
        echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa}<hr>";
        $this->Funcionarios += 1;
    }
    
    public function VerEmpresa() {
        echo "{} foi fundada por {}<br><small style='color:crimson'>";
            parent::VerPessoa();
        echo "</small>";
    }
}

?>
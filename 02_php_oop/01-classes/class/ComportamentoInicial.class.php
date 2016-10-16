<?php

error_reporting(E_ALL);

class ComportamentoInicial {

    // toda classe em seu comportamento inicial recebe o valor de null.
    var $Nome;
    var $Idade;
    var $Profissao;
    var $Salario;

    // para lidar com o valor de null, utilizamos os constructors, que definem os valores iniciais para os parametros da classe
    // o valor do constructor é atribuido ao criarmos uma nova instancia (objeto) da classe.
    function __construct($Nome, $Idade, $Profissao, $Salario) {
        $this->Nome = (string) $Nome;
        $this->Idade = (int) $Idade;
        $this->Profissao = (string) $Profissao;
        $this->Salario = (float) $Salario;
        echo "O objeto {$this->Nome} foi iniciado<br>";
    }
    
    // metodo para visualizar objeto    
    function ver() {
        echo '<pre>';
            print_r($this);
        echo '</pre>';
    }
    
    function __destruct() {
        echo "O objeto foi {$this->Nome} foi destruido.<br>";   
    }
    
}
?>

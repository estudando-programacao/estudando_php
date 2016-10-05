<?php

error_reporting(E_ALL);

class AtributosMetodos {
    
    var $Nome;
    var $Idade;
    var $Profissao;
    
    /* teste 1
     * testando atribuição de valor e tentando puxar em outro método
     */
    // function setUsuario($Nome, $Idade, $Profissao) {
    //     echo $Nome;
    // }
    // function getUsuario() {
    //     // tentando dar echo em atriburo definido através do objeto na view. Deve apresentar fala pois o valor do atributo não está persistindo na memoria.
    //     echo $Nome;
    // }
    
    
    /* teste 2
     * ajustando teste 1, atribuindo valores corretamente e manipulando atributos
     */
    
    // metodo para definir valores dos parametros
    function setUsuario($Nome, $Idade, $Profissao) {
        // aqui definimos que os parametros devem utilizar os dados atribuidos as variaves de mesmo nome dos parametros
        // utilizar os mesmos nomes para os parametros e variavei facilita o entendimento do código
        $this->Nome = $Nome;
        $this->Profissao = $Profissao;
        $this->setIdade($Idade);
    }
    
    // metodo para definir valores do usuário com base nas variaveis declaradas (de mesmo nome, no parametro)
    function getUsuario() {
        return "{$this->Nome} tem {$this->Idade} anos de idade. Trabalha com {$this->Profissao}.";
    }
    
    // metodo para verificar se idade é atribuida com numero
    function setIdade($Idade) {
        if (!is_int($Idade)):
            die('Idade informada é inválida!');
        else:
            $this->Idade = $Idade;
        endif;
    }
    
    // demonstrando como alterar valor de parametro com funcao de um metodo
    function Envelhecer() {
        $this->Idade = $this->Idade + 1;
    }
    
     function getClasse() {
        echo '<pre>';
            print_r($this);
        echo '</pre>';
    }
}

// basicamente os atributos guardam valores na memória
// os métodos devem ser utilizados para atribuir valores aos atributos, assim podemos utilizar os atributos com dados persistentes por toda a classe.
// nem sempre é necessário manipular os parametros, podemos utilizar métodos bem definidos para tal.

?>
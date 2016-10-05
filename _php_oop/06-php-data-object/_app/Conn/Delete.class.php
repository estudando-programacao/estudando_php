<?php

/**
 *  classe generica para deletar registros no banco de dados
 */
class Delete extends Conn {

    private $Tabela;
    private $Termos;
    private $Places;
    private $Result;

    /** @var PDOStatement */
    private $Delete;

    /** @var PDO */
    private $Conn;

    public function ExeDelete($Tabela, $Termos, $ParseString) {
        $this->Tabela = (string) $Tabela;
        $this->Termos = $Termos;

        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    public function getResult() {
        return $this->Result;
    }

    public function getRowCount() {
        return $this->Delete->rowCount();
    }

    public function setPlaces($ParseString) {
        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }

    /**
     * ****************************************
     * ********** PRIVATE METHODS *************
     * ****************************************
     */
    private function Connect() {
        // pegamos a conexao na classe pai
        $this->Conn = parent::getConn();
        // utilizamos a classe Delete para preparar a query com a conexão
        $this->Delete = $this->Conn->prepare($this->Delete);
    }

    private function getSyntax() {
        // aplicamos a sintaxe do PDOStatement
        $this->Delete = "DELETE FROM {$this->Tabela} {$this->Termos}";        
    }

    private function Execute() {
        $this->Connect();
        try {
            $this->Delete->execute($this->Places);
            $this->Result = true; 
        } catch (PDOException $e) {
            $this->Result = null;
            WSError("Erro ao atualizar: {$e->getMessage()}", $e->getCode());
        }
    }

}

?>

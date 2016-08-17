<?php

// classe generica para criar registro no banco de dados
class Create extends Conn {
  // atributos privates pois apenas esta classe vai manipular os atributos
  // tabela a ser utilizada
  private $Tabela;
  // dados a serem inseridos
  private $Dados;
  // retorno de resultados
  private $Result;

  /** @var PDOStatement */
  private $Create;

  /** @var PDO */
  private $Conn;

  /**
  * <b>ExeCreate:</b> Executa um cadastro simplificado no BD utilizando PS.
  * Informar nome de tabela e um array atribuitivo com nome da coluna e valor;
  * @param STRING $Tabela = informe o nome da tabela no banco;
  * @param ARRAY $Dados = informe um array atribuitivo. (Nome Da Coluna => Valor).
  */

  // funcao publica pois atraves desta executamos a inclusão de dados
  public function ExeCreate($Tabela, array $Dados) {
    // aqui definimos os valores ao executar o método
    $this->Tabela = (string) $Tabela;
    // dados é uma array, note que já foi definido ao declarar o método
    $this->Dados = $Dados;
    // agora, o implode do metodo getSyntax transforma a array em string
    $this->getSyntax();
    // e o metodo Execute insere os dados
    $this->Execute();
  }

  // retorna se cadastro foi efeutado ou não, atraves do atributo Result
  public function getResult() {
    return $this->Result;
  }

  /**
  * ****************************************
  * ********** PRIVATE METHODS *************
  * ****************************************
  */

  // obtem a conexão com a PDO, através do método pai getConn
  private function Connect() {
    // obtemos a conexão
    $this->Conn = parent::getConn();
    // criamos a query dentro do atributo Create
    $this->Create = $this->Conn->prepare($this->Create);
  }

  // metodo responsável por formatar a query a ser executada, e incluida no atributo Create
  private function getSyntax() {
    // implode para retornar apenas os indices do array
    $Fields = implode(', ', array_keys($this->Dados));
    // implode para formatar informações de acordo com a query
    $Places = ':' . implode(', :', array_keys($this->Dados));
    // agora definimos a query no parametro Create, pegandos os dados do $Fields e $Places
    $this->Create = "INSERT INTO {$this->Tabela} ({$Fields}) VALUES ({$Places})";
  }

  // suporte para executar a query
  private function Execute() {
    $this->Connect();[[]]
    try {
      $this->Create->execute($this->Dados);
      $this->Result = $this->Conn->lastInsertID();
    } catch (PDOException $e) {
      $this->Result = null;
      WSError("Erro ao cadastrar: {$e->getMessage()}", $e->getCode());
    }
  }

}

?>

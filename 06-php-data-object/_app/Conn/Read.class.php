<?php

// classe generica para ler registros no banco de dados
class Read extends Conn {
  private $Select;
  private $Places;
  private $Result;

  /** @var PDOStatement */
  private $Read;
  /** @var PDO */
  private $Conn;


  public function ExeRead($Tabela, $Termos = null, $ParseString = null) {
    // verificamos se existe a variável ParseString
    if(!empty($ParseString)):
      // aqui pegamos os valores dos links, definidos na utilização do método, como string, e transformamos em uma array, para inclusão no banco / parse_str($str, $arr) é um método do PHP
      parse_str($ParseString, $this->Places);
    endif;
    // após a validação, atribuimos a variável o seguinte valor ao parametro Select
    $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
    // executamos o método Execut
    $this->execute();
  }

  public function getResult() {
    return $this->Result;
  }

  // retorna uma string com o resultado da query
  public function getRowCount() {
    return $this->Read->rowCount();
  }

  // public function FullRead($Query, $ParseString = null) {
  //   $this->;
  // }

  /**
  * ****************************************
  * ********** PRIVATE METHODS *************
  * ****************************************
  */

  private function Connect() {
    // criado objeto PDO
    $this->Conn = parent::getConn();
    // preparamos a query
    $this->Read = $this->Conn->prepare($this->Select);
    // setamos o retorno como array
    $this->Read->setFetchMode(PDO::FETCH_ASSOC);
  }

  private function getSyntax() {
    // verificamos se o atributo Places tem valores
    if($this->Places):
      // para cada indice criado, fazer um bind
      // note que o parametro Places detém os valores do ParseString, que remetem aos :links
      foreach($this->Places as $Vinculo => $Valor):
        // verificamos se o :link é igual a uma das condições abaixo
        if($Vinculo == 'limit' || $Vinculo == 'offset'):
          // se sim, tratamos o mesmo com INT
          $Valor = (int) $Valor;
        endif;
        // após a verificação, executamos o bind, para de fato gerar a query.
        // mpte que utilizamos uma variável ternária para executar outra validação.
        $this->Read->bindValue(":{$Vinculo}", $Valor, (is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
      endforeach;
    endif;
  }

  // suporte para executar a query
  private function Execute() {
    $this->Connect();
    try {
      $this->getSyntax();
      $this->Read->execute();
      $this->Result = $this->Read->fetchAll();
    } catch (PDOException $e) {
      $this->Result = null;
      WSError("Erro ao cadastrar: {$e->getMessage()}", $e->getCode());
    }
  }

}

?>

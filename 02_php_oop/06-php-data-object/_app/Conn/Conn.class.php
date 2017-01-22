<?php

class Conn {
  // utilizamos os termos definidos no arquivo Config.inc.php para preparar a conexão com o banco de dados
  private static $Host = HOST;
  private static $User = USER;
  private static $Pass = PASS;
  private static $Dbsa = DBSA;

  // parametro privado para evitar a execução fora da classe / definido como null, se a conexão for OK o mesmo se torna true.
  private static $Connect = null;

  // metodo para conexao
  private static function Conectar() {
    
    try {
      
      // verifica se a conexão é null / se não houver uma instância do objeto a mesma é criada
      if(self::$Connect == NULL):
        
        // dsn - determina o tipo de conexão com o BD
        $dsn = "mysql:host=" . self::$Host . ";dbname=" . self::$Dbsa;
        // setar caracteres como utf8
        $options = [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
        // deinifmos o objeto de conexao PDO na variável $Connect, caso a condição seja verdadeira
        self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);
        
      endif;
      // bloco catch para lançar exceções, conforme erros de exceções
    } catch (PDOException $e) {
      PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
      die;
    }

    self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return self::$Connect;
  }

  public static function getConn() {
    return self::Conectar();
  }

}

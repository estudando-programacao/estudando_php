<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>treinando php</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript">
    </script>
</head>
<body class="container" style="margin-top: 80px;">

    <p class="text-center">PDO - PHP Data Object</p>

    <?php
    require('./_app/Config.inc.php');

    $PDO = new Conn;
    $name = "Firefox";
    $views = "200";

    try {
      // Definimos a query / note que nos campos Values, definimos os valores com duas interrogações, para evitar hacks (sql injection)
      $QRCreate = "INSERT INTO  ws_siteviews_agent (agent_name, agent_views) VALUES (?, ?)";
      // aqui utilizamos a variável $Create para preparar a execução da query
      $Create = $PDO->getConn()->prepare($QRCreate);

      // abaixo no teste de atribuição de valor com o bindValue (serve para definir um valor a um parametro), definimos os valores do primeiro e segundo campo do VALUES a partir da query / note que a posição é definida pela ordem dos campos e que o tipo do dado também é definido.
      // $Create->bindValue(1, 'Safari', PDO::PARAM_STR);
      // $Create->bindValue(2, '5', PDO::PARAM_INT);

      // agora, teste com bindParam (serve para definir um parametro a uma variável)
      // $Create->bindParam(1, $name, PDO::PARAM_STR, 15);
      // $Create->bindParam(2, $views, PDO::PARAM_STR, 15);

      // executamso metodo do PDO (execute) a partir do
      // $Create->execute();

      // utlizamos a condição abaixo caso o $Create não apresente falha, para apresentar o numero de linhas alteradas na tabela (no exemplo, apenas para contar quandos registros já foram executados)
      if($Create->rowCount()):
        // echo apresentando o ultimo id inserido, através do método lastInsertID() do PDO
        // detalhe: o id de alteração deve ser solicitado atráves da conexao, neste caso o $PDO (instância do Conn) está sendo utilizado para solicitarmos o ultimo id inserido.
        echo "{$PDO->getConn()->lastInsertId()} - Cadastro com Sucesso!<hr>";
      endif;

      // aqui efetuamos um select na base de dados / note que no WHERE definimos um link para posteriormente definirmos o seu valor
      $QrSelect = "SELECT * FROM ws_siteviews_agent WHERE agent_views >= :visitas";

      // preparamos a query através da conexao / $PDO = instancia da class Conn
      $Select = $PDO->getConn()->prepare($QrSelect);
      // aqui definimos o valor do link :visitas para 128, ou seja, a query deve retornar apenas valores maiores que este
      $Select->bindValue(":visitas", "1");
      // executamos a query, após aplicar as modificações
      $Select->execute();

      // verificamos se q quantidade de linhas é maior que 1
      if($Select->rowCount() >= 1):
        // se sim, a pesquisa retorna o número de registros encontrados a partir das definições acima
        echo "Pesquisa retornou {$Select->rowCount()} resultado(s).<hr>";
        $resultado = $Select->fetchAll(PDO::FETCH_ASSOC);
        var_dump($resultado);
      else:
        // se não, erro.
        echo "Nenhum resultado.<hr>";
      endif;

    } catch (PDOException $e) {
      // caso seja apresentada falha, o catch vai disparar erro (exceções)
      PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
    }

    ?>

</body>
</html>

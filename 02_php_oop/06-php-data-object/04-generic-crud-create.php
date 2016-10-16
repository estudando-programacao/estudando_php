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

    $Cadastra = new Create;

    // conforme o metodo ExeCreate, passamos os valores em uma array através da variável $Dados e então, através da instância do objeto Create, incluimos na tabela "ws_siteviews_agent" os $Dados

      // $Dados = ["agent_name" => "Internet Explorer", "agent_views" => "2000"];
      // $Cadastra->ExeCreate("ws_siteviews_agent", $Dados);

      $Dados = ["agent_name" => "Safari", "agent_views" => "5000"];
      $Cadastra->ExeCreate("ws_siteviews_agent", $Dados);

    // // testes de inclusão
    // $Dados = ["agent_name" => "Teste Browser", "agent_views" => "128"];
    // $Cadastra->ExeCreate("ws_siteviews_agent", $Dados);

    if($Cadastra->getResult()):
      echo "Cadastro efetuado com sucesso!<hr>";
    endif;

    var_dump($Cadastra);
    ?>
</body>
</html>

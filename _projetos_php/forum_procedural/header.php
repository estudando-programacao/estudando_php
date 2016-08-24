<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum - testando conhecimentos em PHP</title>
        <!-- Bootstrap -->
        <!--<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet">-->
        <!--<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet">-->
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>        

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">Fórum</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">                    
                    <ul class="nav navbar-nav navbar-left">
                        <li><a class="item" href="create_topic.php">Criar Tópico</a></li>
                        <li><a class="item" href="create_cat.php">Criar Categoria</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="item" href="signin.php">Entrar</a></li>
                        <li><a class="item" href="signup.php">Registrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container alert alert-info" role="alert">
            <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            if (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true) {
                echo '<p>Olá <kbd>' . $_SESSION['user_name'] . '</kbd>. <hr><a href="signout.php" class="btn btn-danger btn-xs">Não é você? Logout</a></small></p>';
            } else {
                echo '<a href="signin.php" class="btn btn-xs btn-success">Logue no sistema</a> ou <a href="signup.php" class="btn btn-xs btn-success">crie uma conta</a>';
            }
            ?>
        </div>

<?php
//        $error = false;
//        if ($error = false) {
//            echo '<div class="container alert alert-success">conteúdo incluido com sucesso.</div>';
//        } else {
//            echo '<div class="container alert alert-danger">erro.<br><small>não foi possível incluir o conteúdo.</small></div>';
//        }
?>



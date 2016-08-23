<?php

//signin.php
include 'connect.php';
include 'header.php';


echo '<div class="container">';

echo '<h3>Logar no Fórum</h3>';

//first, check if the user is already signed in. If that is the case, there is no need to display this page
// verificamos se a sessão já foi iniciada com o usuário em questão
if (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true) {
    echo 'Você já está logado. Você pode <a href="signout.php">deslogar</a> se desejar.';
} else {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo '
        <form method="post" action="" class="form-group">
            <div class="form-group">
                <label for="user_name">Usuário</label>
                <input type="text" name="user_name" class="form-control" placeholder="entre com um usuário" />
            </div>
            <div class="form-group">
                <label for="user_pass">Senha</label>
                <input type="password" name="user_pass" class="form-control" id="user_pass" placeholder="entre com uma senha">
            </div>
            <div class="form-group">
                <input type="submit" value="Logar" class="btn btn-default">
            </div>
        </form>';
    } else {

        // declaramos uma array para armazenar os erros e utiliza-los posteriormente
        $errors = array();

        if (!isset($_POST['user_name'])) {
            // verificamos SE o valor inputado no campo user_name contém caracteres alfanuméricos, se não, é apresentado erro
            $errors[] = 'O campo do nome de usuário não pode estar em branco.';
        }

        if (!isset($_POST['user_pass'])) {
            $errors[] = 'O campo da senha não pode estar em branco.';
        }

        // se a array $errors agregar erros, entramos no laço foreach
        if (!empty($errors)) {
            echo 'Os campos a seguir não foram digitados corretamnte:';
            echo '<ul>';
            foreach ($errors as $key => $value) {
                echo '<li>' . $value . '</li>';
            }
            echo '</ul>';
        } else {
            $sql = "SELECT 
                        user_id,
                        user_name,
                        user_level
                    FROM
                        users
                    WHERE
                        user_name = '" . mysql_real_escape_string($_POST['user_name']) . "'
                    AND
                        user_pass = '" . sha1($_POST['user_pass']) . "'";

            // executamos a query a partir da variável $result, que vai executar a query na variável $sql através 
            $result = mysql_query($sql);

            if (!$result) {
                echo '<div class="alert alert-danger">Ocorreu um erro, tente novamente.</div>';
                echo mysql_error();
            } else {                
                if (mysql_num_rows($result) == 0) {
                    echo '<div class="alert alert-danger">Seus dados para login estão incorretos, favor tentar novamente.</div';
                } else {
                    $_SESSION['signed_in'] = true;
                    while ($row = mysql_fetch_assoc($result)) {
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['user_name'] = $row['user_name'];
                        $_SESSION['user_level'] = $row['user_level'];
                    }
                    echo '<div class="alert alert-success">Bem vindo, <strong>' . $_SESSION['user_name'] . '. </strong><br><a href="index.php">Prosseguir para o fórum</a></div>';
                }
            }
        }
    }
}

echo '</div>';

include 'footer.php';
?>
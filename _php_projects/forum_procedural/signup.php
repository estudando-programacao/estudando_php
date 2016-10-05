<?php

//signup.php
include 'connect.php';
include 'header.php';

echo '<div class="container">';

echo '<h3>Cadastro de usuários</h3>';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // exibimos a form com um echo, e com a action nula, o que faz com que post seja executado na mesma página
    echo ' 
    <form method="post" action="" class="form-group">
        <div class="form-group">
            <label for="user_name">Usuário</label>
            <input type="text" name="user_name" class="form-control" id="user_name" placeholder="entre com o nome de usuário">
        </div>
        <div class="form-group">
            <label for="user_pass">Senha</label>
            <input type="password" name="user_pass" class="form-control" id="user_pass" placeholder="entre com uma senha">
            <br>
            <input type="password" name="user_pass_check" class="form-control" placeholder="repetir senha">
        </div>
        <div class="form-group">
            <label for="user_pass">E-mail</label>
            <input type="email" name="user_email" class="form-control" id="user_email" placeholder="entre com um e-mail">            
        </div>
        <div class="form-group">
            <input type="submit" value="Adicionar Usuário" class="btn btn-default">
        </div>
     </form>
    ';
} else {
    
    // declaramos uma array para armazenar os erros e utiliza-los posteriormente
    $errors = array();

    if (isset($_POST['user_name'])) {
        // verificamos SE o valor inputado no campo user_name contém caracteres alfanuméricos, se não, é apresentado erro
        if (!ctype_alnum($_POST['user_name'])) {
            $errors[] = 'O nome de usuário deve conter apenas caracteres alfanuméricos.';
        }
        // verificamos SE o nome de usuário inputado no campo user_name tem mais de 30 caracteres, se sim, é apresentado erro
        if (strlen($_POST['user_name']) > 30) {
            $errors[] = 'O nome de usuário não pode ter mais de 30 caracteres.';
        }
    // se as condições acimas não forem validadas, o else apresenta o erro de que o campo não pode estar vazio
    } else {
        $errors[] = 'O nome de usuário não pode estar vazio.';
    }
    
    // Se houver algum valor no campo user_pass
    if (isset($_POST['user_pass'])) {
        // verificamos SE a senha digitada no campo user_pass é diferente da senha no campo user_pass_check
        if ($_POST['user_pass'] != $_POST['user_pass_check']) {
            // se sim, apresentamos erro
            $errors[] = 'A senha não confere.';
        }
    // se as confições não forem validades, apresentamos falha de campo em branco, conforme a verificação inicial
    } else {
        $errors[] = 'O campo da senha não pode estar em branco.';
    }

    // checamos se a array $errors não está vazia, baseada nas validações anteriores
    if (!empty($errors)) {
        // se a array $errors contém algum erro, printamos
        echo 'Os campos a seguir não foram digitados corretamnte:';
        echo '<ul>';
            // criamos um foreach para tratar cada erro presente no array $errors
            // cada erro será passado para a variável $value, que recebe os dados da $key, que recebe do array $errors
            foreach ($errors as $key => $value) {
                // para cada erro, é criada uma nova linha na lista a seguir, com o erro em questão.
                echo '<li>' . $value . '</li>';
            }
        echo '</ul>';
    // se as validações forem feitas com sucesso
    } else {
        // preparamos a query ba variável $sql
        // utilizamos o mysql_real_escape_string para ajustar caracteres especiais
        // utilizamos o sha1 para criptografar a senha enviada para o sistema
        $sql = "INSERT INTO
                users(user_name, user_pass, user_email ,user_date, user_level)
                VALUES(
                '" . mysql_real_escape_string($_POST['user_name']) . "',
                '" . sha1($_POST['user_pass']) . "',
                '" . mysql_real_escape_string($_POST['user_email']) . "',
                NOW(), 
                0)
        ";
        
        // executamos a query a partir da variável $result, que vai executar a query na variável $sql através 
        $result = mysql_query($sql);
        
        if (!$result) {
            // se a variável $result for igual a false
            echo '<div class="container alert alert-danger">Ocorreu um erro, tente novamente.</div>';
            // debug para apresentar erros
            echo mysql_error();
        } else {
            // se não, apresentamos a mensagem de que o registro foi feito com sucesso
            echo '<div class="container alert alert-success">Registro efetuado com sucesso. <hr>Agora você pode <a href="signin.php" class="btn btn-xs btn-success">entrar</a> no sistema e começar a postar! :)</div>';
            header('Refresh: 3; URL=signin.php');
        }
    }
}
// fechando div container
echo '</div>';

include 'footer.php';
?>
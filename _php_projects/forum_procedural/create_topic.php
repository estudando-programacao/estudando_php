<?php

//create_cat.php
include 'connect.php';
include 'header.php';

echo '<div class="container">';

echo '<h2>Criar Tópico</h2>';

if ($_SESSION['signed_in'] == false) {
    echo '<div class="alert alert-warning">Você precisa estar <a href="signin.php">logado</a> para criar um tópico.<hr>Redirecionamento automático em 5 segundos.</div>';
    header('Refresh: 5; URL=signin.php');
} else {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";

        $result = mysql_query($sql);

        if (!$result) {
            echo '<div class"alert alert-danger">Erro ao retornar dados do BD.</div>';
        } else {
            if (mysql_num_rows($result) == 0) {
                if ($_SESSION['user_level'] == 1) {
                    echo '<div class"alert alert-warning">Nenhuma categoria criada.</div>';
                } else {
                    echo '<div class"alert alert-warning">Antes de postar um tópico, o administrador precisa postar uma categoria.</div>';
                }
            } else {
                echo '
                    <form method="post" action="" class"form-group">
                        <div class="form-group">
                            <label for="user_name">Assunto</label>
                            <input type="text" name="topic_subject" class="form-control" id="topic_subject">
                        </div>
                        <div class="form-group">
                            <label for="topic_cat">Categoria</label><br>';
                echo '<select name="topic_cat" class="form-control" id="topic_cat">';
                while ($row = mysql_fetch_assoc($result)) {
                    echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                }
                echo '</select></div>';
                echo '<div class="form-group">
                            <label for="post_content">Mensagem</label>
                            <input type="text" name="post_content" class="form-control" id="post_content">
                        </div>
                        <input type="submit" value="Criar tópico" class="btn btn-default" />
                    </form>
                    ';
            }
        }
    } else {
        $query = "BEGIN WORK;";
        $result = mysql_query($query);

        if (!$result) {
            echo '<div class="alert alert-danger">Erro ao criar tópico. Tente novamente.</div>';
        } else {
            $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('" . mysql_real_escape_string($_POST['topic_subject']) . "',
                               NOW(),
                               " . mysql_real_escape_string($_POST['topic_cat']) . ",
                               " . $_SESSION['user_id'] . "
                   )";
            $result = mysql_query($sql);            
            if (!$result) {
                echo '<div class="alert alert-danger">Erro ao inserir informações. Tente novamente</div>' . mysql_error();
                $sql = "ROLLBACK;";
                $result = mysql_query($sql);
            } else {
                $topicid = mysql_insert_id();

                $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . mysql_real_escape_string($_POST['post_content']) . "',
                                  NOW(),
                                  " . $topicid . ",
                                  " . $_SESSION['user_id'] . "
                            )";
                $result = mysql_query($sql);

                if (!$result) {
                    echo 'Ocorreu um erro. Tente novamente mais tarde.' . mysql_error();
                    $sql = "ROLLBACK;";
                    $result = mysql_query($sql);
                } else {
                    $sql = "COMMIT;";
                    $result = mysql_query($sql);
                    echo '<div class="alert alert-success">O <a href="topic.php?id=' . $topicid . '">tópico</a> foi criado com sucesso.';
                }
            }
        }
    }
}

echo '</div>';

include 'footer.php';
?>
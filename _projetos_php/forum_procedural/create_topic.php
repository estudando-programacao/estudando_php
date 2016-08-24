<?php
//create_cat.php
include 'connect.php';
include 'header.php';
 
echo '<div class="container">';

echo '<h2>Criar Tópico</h2>';

if($_SESSION['signed_in'] == false)
{
    echo 'Desculpe, você precisa estar <a href="/forum/signin.php">logado</a> para criar um tópico.';
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {   
        $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";
         
        $result = mysql_query($sql);
         
        if(!$result)
        {
            echo '<div class"alert alert-danger">Erro ao retornar dados do BD.</div>';
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                if($_SESSION['user_level'] == 1)
                {
                    echo '<div class"alert alert-warning">Nenhuma categoria criada.</div>';
                }
                else
                {
                    echo '<div class"alert alert-warning">Antes de postar um tópico, o administrador precisa postar uma categoria.</div>';
                }
            }
            else
            {         
                echo '
                    <form method="post" action="" class"form-group">
                        <div class="form-group">
                            <label for="user_name">Assunto</label>
                            <input type="text" name="topic_subject" class="form-control" id="topic_subject">
                        </div>
                        <div class="form-group">
                            <label for="topic_cat">Categoria</label><br>';                 
                        echo '<select name="topic_cat" class="form-control" id="topic_cat">';
                            while($row = mysql_fetch_assoc($result))
                            {
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
    }
    else
    {
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysql_query($query);
         
        if(!$result)
        {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {
     
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
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
            if(!$result)
            {
                //something went wrong, display the error
                echo 'An error occured while inserting your data. Please try again later.' . mysql_error();
                $sql = "ROLLBACK;";
                $result = mysql_query($sql);
            }
            else
            {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
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
                 
                if(!$result)
                {
                    //something went wrong, display the error
                    echo 'An error occured while inserting your post. Please try again later.' . mysql_error();
                    $sql = "ROLLBACK;";
                    $result = mysql_query($sql);
                }
                else
                {
                    $sql = "COMMIT;";
                    $result = mysql_query($sql);
                     
                    //after a lot of work, the query succeeded!
                    echo 'You have successfully created <a href="topic.php?id='. $topicid . '">your new topic</a>.';
                }
            }
        }
    }
}

echo '</div>';

include 'footer.php';
?>
<?php

include 'connect.php';
include 'header.php';

//
//echo '<table class="table table-bordered">';
//    echo '<tr>';
//        echo '<td>';
//            echo '<h3><a href="category.php?id=">Categoria [NOME]</a></h3> Categoria [DESCRIÇÃO]';
//        echo '</td>';
//        echo '<td>';                
//                echo '<a href="topic.php?id=">Tópico - Assunto</a> at 10-10';
//        echo '</td>';
//    echo '</tr>';
//echo '</table>';
//

echo '<div class="container">';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    //the form hasn't been posted yet, display it
    echo '<form method="post" action="" class="form-group">
            <div class="form-group">
                <label for="cat_name">Nome da categoria</label>
                <input type="text" name="cat_name" class="form-control" id="cat_name" placeholder="entre com o nome de usuário">
            </div>
            <div class="form-group">
                <label for="cat_description">Descrição da categoria</label>
                <textarea  name="cat_description" class="form-control" id="cat_description"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Adicionar categoria" class="btn btn-default">
            </div>
        </form>';
} else {
    $sql = "INSERT INTO categories(cat_name, cat_description) VALUES('" . mysql_real_escape_string($_POST['cat_name']) . "','" . mysql_real_escape_string($_POST['cat_description']) . "')";

    $result = mysql_query($sql);
    if (!$result) {
        echo '<div class="alert alert-danger">Ocorreu um erro, tente novamente.</div>';
        echo mysql_error();
    } else {
        echo '<div class="container alert alert-success">Nova Categoria adicionada com sucesso.</div>';
    }
}

echo '</div>';
include 'footer.php';

?>

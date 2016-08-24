<?php

include 'connect.php';
include 'header.php';

echo '<div class="container">';

echo '<h2>Criar Categoria</h2>';

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

if ($_SESSION['user_level'] == 1) {
    echo '
            <form method="post" action="" class="form-group">
                <div class="form-group">
                    <label for="cat_name">Nome da categoria</label>
                    <input type="text" name="cat_name" class="form-control" id="cat_name">
                </div>
                <div class="form-group">
                    <label for="cat_description">Descrição da categoria</label>
                    <textarea  name="cat_description" class="form-control" id="cat_description"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Adicionar categoria" class="btn btn-default">
                </div>
            </form>
        ';
} else {
    echo '<div class="alert alert-warning">Você não tem privilégios para criar categorias.</div>';
}

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $sql = "INSERT INTO categories(cat_name, cat_description) VALUES('" . mysql_real_escape_string(isset($_POST['cat_name'])) . "','" . mysql_real_escape_string(isset($_POST['cat_description'])) . "')";
    $result = mysql_query($sql);
    if (!$result) {
        echo '<div class="alert alert-danger">Ocorreu um erro, tente novamente.</div>';
    } else {
        echo '<div class="alert alert-success">Nova categoria adicionada com sucesso.</div>';
    }
}


echo '</div>';

include 'footer.php';
?>

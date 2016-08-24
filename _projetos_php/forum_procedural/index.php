<?php

include 'connect.php';
include 'header.php';

echo '<div class="container">';

$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories";
 
$result = mysql_query($sql);
 
if(!$result)
{
    echo '<div class="alert alert-danger">Erro, as categorias não foram carregadas. Tente novamente.</div>';
    echo mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0) {
        echo '<div class="alert alert-warning">nenhuma categoria registrada</div>';
    } else {
        echo '<table class="table table-hover">
              <tr>
                <th>Categoria</th>
                <th>Ultimo tópico</th>
              </tr>';             
        while($row = mysql_fetch_assoc($result)) {               
            echo '<tr>';
                echo '<td>';
                    echo '<h3><a href="category.php?id">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                echo '</td>';
                echo '<td>';
                            echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
                echo '</td>';
            echo '</tr>';
        }
    }
}

echo '</div>';
 
include 'footer.php';

?>
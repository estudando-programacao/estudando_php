<?php

include 'connect.php';
include 'header.php';

echo '<table class="table table-bordered">';
    echo '<tr>';
        echo '<td>';
            echo '<h3><a href="category.php?id=">Categoria [NOME]</a></h3> Categoria [DESCRIÇÃO]';
        echo '</td>';
        echo '<td>';                
                echo '<a href="topic.php?id=">Tópico - Assunto</a> at 10-10';
        echo '</td>';
    echo '</tr>';
echo '</table>';

include 'footer.php';

?>

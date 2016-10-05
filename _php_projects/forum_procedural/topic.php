<?php

include 'connect.php';
include 'header.php';

echo '<div class="container">';

$sql = "SELECT
            topic_id,
            topic_subject
        FROM
            topics
        WHERE
            topics.topic_id = " . mysql_real_escape_string($_GET['id']);

$result = mysql_query($sql);

if (!$result) {
    echo '<div class="alert alert-danger">A categoria não pode ser exibida</div><hr>' . mysql_error();
} else {
    if (mysql_num_rows($result) == 0) {
        echo '<div class="alert alert-warning">Essa categoria não existe</div>';
    } else {
        while ($row = mysql_fetch_assoc($result)) {
            echo '<h2>Tópicos na categoria <span class="text text-success text-uppercase">' . $row['cat_name'] . '</span></h2>';
        }

        $sql = "SELECT  
                    topic_id,
                    topic_subject,
                    topic_date,
                    topic_cat
                FROM
                    topics
                WHERE
                    topic_cat = " . mysql_real_escape_string($_GET['id']);

        $result = mysql_query($sql);

        if (!$result) {
            echo '<div class="alert alert-danger">Os tópicos não podem ser exibidos, por favor tente mais tarde.</div>';
        } else {
            if (mysql_num_rows($result) == 0) {
                echo '<div class="alert alert-warning">Não há tópicos nessa categoria.</div>';
            } else {
                echo '<table class="table table-hover">
                      <tr>
                        <th>Tópico</th>
                        <th>Criado em</th>
                      </tr>
                      ';

                while ($row = mysql_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td class="leftpart">';
                    echo '<p><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><p>';
                    echo '</td>';
                        echo '<td class="rightpart">';
                    echo date('d-m-Y', strtotime($row['topic_date']));
                    echo '</td>';
                    echo '</tr>';
                }
            }
        }
    }
}

echo '</div>';

include 'footer.php';

?>
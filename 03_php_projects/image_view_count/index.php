<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test image view count</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  
</head>
<body class="container result" style="margin-top: 50px;">
    
    <?php
    
    require_once '../../03_php_projects/testando_composer/vendor/autoload.php';
        
        mysql_connect('localhost','root','');
        mysql_select_db('tarefas_phpbook_cc');
        
        $result = mysql_fetch_array(mysql_query("SELECT count FROM counter WHERE id='1'"));
        
        r($result['count']);
        
        $imageViews = "https://s-media-cache-ak0.pinimg.com/736x/da/48/6d/da486deb227259b7eab19386b584c8fd.jpg?views={$result['count']}";
        
        if (isset($imageViews)) {
            $number = ($result['count']) + 1;
            $result = mysql_query("UPDATE counter SET count = ' $number ' WHERE id='1'");
            $number = (string) $number;
        }
        
        echo "views: {$result['count']}";
        
        // r($_GET);
    
    ?>
    
    <hr>
    
    <img class="img-fluid" src="<?php echo $imageViews; ?>"></img>
    
    <p><?php echo $imageViews; ?></p>
    
    <script type="text/javascript">
        $.post( "<?php echo $imageViews; ?>", function( data ) {
          $( ".result" ).html( data );
        });
    </script>
    
    
</body>
</html>
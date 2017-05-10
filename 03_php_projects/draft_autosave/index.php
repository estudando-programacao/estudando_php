<?php

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'draft_autosave';

$dc = new PDO("mysql:host={$bdServidor};dbname={$bdBanco}", $bdUsuario, $bdSenha);

$title      =&  $_POST['title'];
$body       =&  $_POST['body'];
$gtmsg      =&  $_POST['gtmsg'];    
$user_id    =   1;

$stmt = $dc->query("SELECT * FROM msg_autosave WHERE user='$user_id'");

$return_count = $stmt->rowCount();

echo $return_count;

if($return_count > 0){
    
    if(isset($title)){
        /* Update autosave */
        $update_qry = $dc->prepare("UPDATE msg_autosave SET msg_title='$title', msg_body='$body' WHERE user='$user_id'");
        $update_qry -> execute();
        
    } else {
        /* Get saved data from database */ 
        $get_autosave = $dc->prepare("SELECT * FROM msg_autosave WHERE user='$user_id'");
        $get_autosave->execute();
        
        while ($gt_v = $get_autosave->fetch(PDO::FETCH_ASSOC)) {
            $title=$gt_v['msg_title'];
            $body=$gt_v['msg_body']; 
            echo json_encode(array('title' => $title, 'body' => $body));
        }       
        
    }
} else { 
    /* Insert the variables into the database */ 
    $insert_qry = $dc->prepare("INSERT INTO msg_autosave (user, msg_title, msg_body) VALUES (?, ?, ?)");
    $insert_qry->execute(array($user_id, $title, $body));  
}

?>

<!doctype html>
<html lang="en">
    
<head>
    <meta charset="UTF-8" />
    <title>Auto Save Draft | RRPowered</title>
    <link rel="stylesheet" type="text/css" href="css/rrpowered-autosavedraft.css" />
    <script rel="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script rel="text/javascript" src="rrpowered-autosavedraft.js"></script>
</head>

<body>
    
    <script type="text/javascript">
        $(function () {
            
            // $.post("php/rrpowered-autosave.php", function (data) {
            //     $("[name='title']").val(data.title);
            //     $("[name='body']").val(data.body);
            // }, "json");
            
            // setInterval(function () {
            //     $.post("php/rrpowered-autosave.php", $("form").serialize());
            // }, 2000);
            
        });
    </script>
    
    <div class="center">
        
        <div class="saved"></div>
        
        <form>
            <input type="text" name="title" placeholder="Title" autofocus>
            <textarea type="text" name="body" placeholder="Body"></textarea>
            <input type="submit" value="Send">
        </form> 
        
    </div> 
    
</body>

</html>
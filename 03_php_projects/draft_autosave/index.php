<?php

require_once '../../03_php_projects/testando_composer/vendor/autoload.php';

$a = mt_rand(999, 100000);

setcookie(mt_rand(0,10), $a);

setcookie('draft', "created with php");

r($_COOKIE);

?>

    <!doctype html>
    <html lang="en">

    <head>
        
        <meta charset="UTF-8">
        
        <title>cookie autosave</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
         <script type="text/javascript">
        
            // $("#target").keypress(function() {
            //     console.log("Handler for .keypress() called.");
            // });

            document.body.addEventListener('keydown', function(e) {

                if (e.keyCode == "66" || e.keyCode == "82") {
                    
                    if (e.keyCode == "66") {
                        var key = "B";
                    }
                    
                    if (e.keyCode == "82") {
                        var key = "R";
                    }
                    
                    var text = document.getElementById('target').value;
                        
                    // alert(text);
                    
                    console.log(document.cookie = "autodraft=" + text);
                    
                    document.cookie = "autodraft=" + text;
                    
                    // window.location.href = "https://treinando-php-reload-thierryrene.c9users.io/03_php_projects/draft_autosave/index.php?text=" + text;

                }

            });
            
            // document.getElementById('target').value(document.cookie);

            // document.cookie = "username=thierryrenematos";
            // var x = document.cookie;
            // console.log(x);
        </script>
    </head>

    <body class="container">

        <h1>cookies</h1>
        <hr>
        <form>
            <label for="">title</label>
            <input type="text" name="title" />
            <br>
            <label>text</label>
            <textarea rows="4" cols="50" id="target" name="text">
            </textarea>
            <input type="submit" value="Submit" method="post" />
        </form>
    </body>

    </html>

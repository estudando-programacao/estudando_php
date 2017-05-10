<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
    
    function linha($semana) {
        echo "<tr>";
        for ($i = 0; $i <= 6; $i++) {
            if (isset($semana[$i])) {
                echo "<td>{$semana[$i]}</td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    
    function calendario() {
        $dia = 1;
        $semana = array();
        while ($dia <= 31) {
            array_push($semana, $dia);
            if(count($semana) == 7) {
                linha($semana);
                $semana = array();
            }
            $dia++;
        }
        linha($semana);
    }
    
    if 
    
?>

<!doctype html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dia <?= date('d'); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container">
        
        <h1>Estamos em <?= date('Y'); ?> </h1>
        
        <p class="lead">Agora são <?= date('H'); ?> horas, <?= date('i'); ?> minutos e <?= date('s'); ?> segundos.</p>
        e
        <div class="row">
            
            <div class="col-md-4">
                
                <table class="table table-bordered">
                    <tr>
                        <th>Dom</th>
                        <th>Seg</th>
                        <th>Ter</th>
                        <th>Qua</th>
                        <th>Qui</th>
                        <th>Sex</th>
                        <th>Sáb</th>
                    </tr>
                    <?php calendario(); ?>
                </table>
                
            </div>
            
        </div>
        
    </div>
    
</body>

</html>


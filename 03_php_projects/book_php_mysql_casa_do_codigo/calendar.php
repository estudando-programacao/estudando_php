<!doctype html>
<html lang="en">

<head>
    <title>Dia <?= date('d'); ?></title>
</head>

<body>
    <h1>Estamos em <?= date('Y'); ?> </h1>
        
    <p>Agora são <?= date('H'); ?> horas e <?= date('i'); ?> minutos.</p>

    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sáb</th>
        </tr>
    </table>
    
</body>

</html>

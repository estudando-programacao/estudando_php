<?php 

header('Content-Type: text/html; charset=utf-8');

$hr = "<hr>";

echo "forks (or) conditions" . $hr;


// if / else / elseif
$panda = 'Lushui';

if ($panda == 'Lushui') {
    echo 'Yey, panda time!';
} elseif ($panda == 'teste') {
    echo 'teste';
} else {
    echo 'Oh hey there Pali!';
}


// switch
$case = 'case';

switch ($case) {
    case 'case':
        echo 'case OK!';
        break;
    case 'case2':
        echo 'case dois!';
        break;
    default:
        echo 'padrão';
        break;
}




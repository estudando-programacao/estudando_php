<?php

// while
$var = 0;

echo $hr;
while($var < 30) {
    echo '$var = ' . $var;
    echo '<br>';
    $var++;
}
echo $hr;


// do/while
$var2 = 0;

do {
    echo "testando do while pela {$var2}x";
    echo "<br>";
    $var2++;
} while ($var2 < 20);
echo $hr;

// for
echo '<p>print até $i ser  igual a 100.</p>';

for ($i = 0; $i < 50; $i++) {
    echo '$i = ' . $i . '<br>';
}

// foreach
$as = [1, 2, 3, 4, 5, 6, 7, 9, 10];
    
echo $hr;

foreach ($as as $a) {
    echo "testando foreach pela {$a}º vez.<br>";
}

echo $hr; 

$bs = [
    0   => 'teste 1',
    1   => 'teste 2',
    2   => 'teste 3',
    3   => 'Lushui',
    4   => 'Pali',
    5   => 'Jasmina'
];

var_dump($bs);

foreach ($bs as $b1 => $b2) {
    
    if ($b1 == null) {
        // avoid null results but continue the rest
        continue;
    }
    
    echo "<span style='background-color:crimson;color:white;'>testing foreach with associative array.</span><br> key: {$b1} | value: {$b2}.<br>";
    // break;
}

var_dump($b1, $b2);

echo $hr;

$numeros = [
    'primeiro'  => 1,
    'segundo'   => 2,
    'terceiro'  => 3
];

foreach ($numeros as $numero1 => $numero2) {
    if ($numero1 == 'segundo') {
        // we valid the key for $numeros array. we pass keys with value equal to "segundo"
        continue;
    }
    echo "testando break e continue. <span style='background-color:gold;color:424242;'>chave: {$numero1} - valor: {$numero2}.</span><br>";
}

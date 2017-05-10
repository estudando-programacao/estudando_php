<?php

$hr = "<hr>";

echo "Arrays" . $hr;

// first way to create an array
$array = array('um', 'dois', 'três', 'quatro', 'cinco', 'seis');
var_dump($array);

// alternativa way to use arrays
$arrayDois = ['sete', 'oito', 'nove', 'dez', 'onze'];
var_dump($arrayDois);

// array of numbers
$numberArray = [1, 2, 3, 4, 5, 6, 7, 8];
var_dump($numberArray);

$floatArray = [10.123, 20.232, 30.54, 4.0, 5.450];
var_dump($floatArray);

$mixedArray = ['text', 1, 2, 3, 'OUW', 10.32];
var_dump($mixedArray);

// access array values
echo $mixedArray[0];
echo $hr;
echo $mixedArray[4];
echo $hr;
echo $floatArray[3];
echo $hr;
echo $numberArray[1];
echo $hr;

// associative arrays
$numbers = [
    'one'       => 1,
    'two'       => 2,
    'three'     => 3,
    'four'      => 4,
    'five'      => 5,
    'six'       => 6
];
var_dump($numbers);

// we need to call the key to show the value
var_dump($numbers['five']);

// multi-dimensional array
$multiArray = [
    'nome'  => 'thierry rene',
    'idade' => 30,
    'sexo'  => 'masculino',
    'tasks' => ['programar', 'ajustar falhas', 'configurar máquinas', 'redes']
];
var_dump($multiArray);
var_dump($multiArray['nome']);
var_dump($multiArray['tasks'][0]);
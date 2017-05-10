<?php

$hr = "<hr>";

echo "03 - strings";

echo $hr;

// Set a string.
$value = 'pandas';

// Single quotes.
$first = 'We love $value!';

// Double quotes.
$second = "We love {$value}!";

// Output.
var_dump($first);
var_dump($second);

echo $hr;

$um = "testando concatenação";
$dois = " no c9 cloud";
$concatenando = "{$um}{$dois}";

// all have the same results
var_dump($concatenando);
var_dump($um . $dois);
var_dump("{$um}{$dois}");

echo $hr;

$tres = "10";
$quatro = "50";

// operações matemáticas com números inteiros em formato de string
var_dump($tres + $quatro);
var_dump($quatro);
var_dump($tres - $quatro);
var_dump($tres * $quatro);
var_dump($tres / $quatro);


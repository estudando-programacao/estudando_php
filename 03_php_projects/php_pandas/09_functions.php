<?php

header('Access-Control-Allow-Origin: *');

header('Content-Type: text/html; charset=utf-8');

/* 
 *
 * a simple function
 *
*/
function echoMsg() {
    $a = "primeira frase";
    $b = " depois de lavar a louça";
    $c = " e depois de amar<br>";
    echo $a . $b . $c . PHP_EOL;
}
echoMsg();
echoMsg();

/* 
 *
 * function with return value
 *
*/
function returnValue() {
    return 42;
}

$result = returnValue();

var_dump($result);
var_dump((array)returnValue());

echo "<hr>";

function sumValues($a, $b, $c, $d, $e) {
    return $a + $b + $c + $d + $e;
}

echo "O resultado da função sumValues é: " . sumValues(123, 54534, 6564, 6565, 878);

echo "<hr>";

/* 
 *
 * function with parameters
 *
*/

// creating the function with parameter
function helloWorld($name) {
    echo "Olá mundão, meu nome é {$name}.";
}

// calling the function with a rand number as parameter
helloWorld(rand(1000, 900000000000000));

echo "<hr>";

/* 
 *
 * simple function with mora than one parameter
 *
*/
function testandoFuncao($a, $b, $c) {
    $total = $a + $b + $c;
    return $total;
}

$randNumber = rand(1, 100);

echo "<p>Testing function with return value and rand numbers:" . testandoFuncao($randNumber, $randNumber, $randNumber) . "</p>";

echo "<hr>";

function randNames() {
    $userNames = ['thierry', 'rene', 'matos', 'amigo', 'nosso', 'triste', 'fim'];
    $randNumbers = mt_rand(0, 6);
    echo "<h3>Frase com palavra aleatória: <small style='color:crimson;'>{$userNames[$randNumbers]}</small></h3>";
}
randNames();

echo "<hr>";

// using the function parameters inside the function
function testeNomes($name, $middleName, $lastName) {
    
    // here we get the values of the parameters
    $nomes = func_get_args();
    
    var_dump($nomes);
    
    // and here we loop through the values and print each one
    foreach ($nomes as $nome) {
        echo $nome . PHP_EOL;
    }
    
}

// executing the function with parameters
testeNomes('thierry', 'rene', 'teste');

echo "<hr>";

// function with parameter validation
function sayHello(array $xS) {
    foreach ($xS as $x) {
        echo "<p>Olá {$x}" . PHP_EOL . "</p>";
    }
}

// here we call the function with the parameter in array type
sayHello(['um', 'dois', 'tres', 'quatro']);

echo "<hr>";
<?php 

require_once '../testando_composer/vendor/autoload.php';

// closures - functions without name
$cat = function () {
    echo "olha o gato!";
};  

var_dump($cat);

$cat();

echo "<hr>";

// pass a closuere to the function

// here we create a function with an closure parameter
function math(Closure $type, $first, $second) {
    // here we use the closure to return the value of the function
    return $type($first, $second);
}

$soma = function ($first, $second) {
    return $first + $second;
};

$subtracao = function ($first, $second) {
    return $first - $second;
};

$multiplicacao = function ($first, $second) {
    return $first * $second;
};

$divisao = function ($first, $second) {
    return $first / $second;
};

echo math($soma, 200, 50);
echo $newLine;
echo math($subtracao, 10, 500);
echo $newLine;
echo math($multiplicacao, 200, 10);
echo $newLine;
echo math($divisao, 5000, 10);
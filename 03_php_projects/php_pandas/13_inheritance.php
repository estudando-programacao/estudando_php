<?php

require_once '../testando_composer/vendor/autoload.php';
require_once 'class/Touro.class.php';
require_once 'class/Casa.class.php';

$newLine = "<hr>";

$touroG = new TouroGigante;
$touro = new Touro;

// here we print the the value that resides on class Touro
echo $touro->getSkin();
echo '<br>';
echo $touro->getSize();
echo '<br>';
echo $touroG->getSize();

echo $newLine;

// here we try to loop throught the properties
r($touroG);

function getObjParams($obj) {
    $params = get_object_vars($obj);
    foreach($params as $param) {
        echo $param . "<br>";
    }
}

getObjParams($touroG);

echo $newLine;

$casa = new Casa;
$house = new House;
$tinyHouse = new tinyHouse;

$casa->houseTool($tinyHouse);
echo '<br>';
$casa->houseTool($house);
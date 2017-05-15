<?php

// casting / changing the data type
$castNumber = '10';

// here the value will be an string
var_dump($castNumber);

// here the value will be an int
var_dump((int)$castNumber);

// returning value to string
var_dump((string)$castNumber);

echo $hr;

$castArray = "teste";

// creating an array based on a variable, by casting the data type
var_dump((array)$castArray);

// here we define an value to $castArray
$castArray = 123.454;

// and then we create an array based on that float number
var_dump((array)$castArray);
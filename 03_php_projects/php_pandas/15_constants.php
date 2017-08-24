<?php

define('NEWLINE', '<hr>');

error_reporting(E_ALL);

ini_set('display_errors', 1);

// constants

define('HOST', 'localhost');

// define('HOST', 'cloud');

echo HOST;

echo NEWLINE;

// example of constant inside a class

class Casa {
    
    /**
     * an constant of a class
     */
    const SIZE = 9999;
    
    /**
     * a function that uses the constant above
     */
     public function getSize($a) {
         
        // here the self keyword is used to indicate a reference inside the class
        // the use of self is more convenient than the class name
        return $a * self::SIZE;
        // or
        // return $a * Casa::SIZE;
     }
}

$casaInstancia = new Casa;

echo $casaInstancia->getSize(999);

echo NEWLINE;

echo Casa::SIZE;

echo NEWLINE;

echo $casaInstancia::SIZE;
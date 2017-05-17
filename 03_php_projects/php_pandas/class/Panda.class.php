<?php

class Panda {
    
    var $loudName;
    var $loudName2;
    
    function __construct() {
        // here we use a method to define the default value to $loudName
        $this->loudName = $this->makeNameLoud('maria do carmo');
        $this->loudName2 = $this->countLetters('thierry rene dos santos matos');
    }
    
    /**
     * method to turn string uppercase
     * @name is the string that need to be uppercase
     */
    function makeNameLoud($name) {
        return strtoupper($name);
    }
    
    function countLetters($name2) {
        return strlen($name2);
    }
    
}
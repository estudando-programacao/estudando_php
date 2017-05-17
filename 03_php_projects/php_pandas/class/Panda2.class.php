<?php

class Panda2 {
    
    var $loudName;
    
    function __construct($name) {
        $this->loudName = $this->toLoud($name);
    }
    
    function toLoud($name) {
        return strtoupper($name);
    }

    
}
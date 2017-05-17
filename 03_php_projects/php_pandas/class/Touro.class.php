<?php

class Touro {
    
    var $skin = 'preto e branco';
    var $size = 'pequeno';
    
    function getSkin() {
        return $this->skin;
    }
    
    function getSize() {
        return $this->size;
    }

    
}

class TouroGigante extends Touro {
    var $skin = 'preto mesmo';
    var $size = 'grande';
    var $test = 'A';
}

<?php

require_once '../testando_composer/vendor/autoload.php';

$newLine = '<hr>';

// scope of methods and properties

/**
 * example of a public function | a public function can be 
 * used with object assign operator "->"
 */
class Homem {
    public $skin = 'preta';
    
    public function getSkin() {
        return $this->skin;
    }
}

// here we create a new instance from the class Homem
$bradPitt = new Homem;

r(Homem, $bradPitt);

// with public functions, we can use the methdos like this
echo $bradPitt->getSkin();

echo $newLine;

/**
 * example of a function with a private propertie and a public
 * function.
 */
class Mulher {
    
    // private properties only can be used inside of the class that it was created
    private $skin = 'rosa';
    
    public function getSkin() {
        return $this->skin;
    }
}

$angelinaJolie = new Mulher;

r(Mulher, $angelinaJolie);

// here we have an error, because is not possible to access a private propertie from an object instance
// echo $angelinaJolie->skin;

// here we have another error. it is not possible to change the value of a private propertie directly
// $angelinaJolie->skin = 'rosinha';

// now we will require the public method of this function
echo $angelinaJolie->getSkin();

echo $newLine;

/**
 * new we have a exemple of a class with private properties
 * and an private method
 */ 
class Crianca {
    
    private $skin = '<p>azul</p>';
    
    private function getSkin() {
        return $this->skin;
    }
    
    public function getSkin2() {
        return $this->skin;
    }
    
    public function testScope() {
        $skinPele = $this->skin;
        return $skinPele;
    }
    
    /**
     * public function that uses an private method
     * this the right way to use a function with private methods
     */
    public function testScope2() {
        $skinPele2 = $this->getSkin();
        return $skinPele2;
    }
}

$cris = new Crianca;

echo $cris->getSkin2();

echo $cris->testScope();

echo $cris->testScope2();

echo $cris->getSkin();


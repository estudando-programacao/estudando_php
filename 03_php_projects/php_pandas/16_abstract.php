<style>
    
    body {
        font-family: verdana;
        font-size: 12px;
        background-color: snow;
    }
    
    hr {
        width: 50%;
        margin: 20px 0px;
    }
</style>

<?php

define('NEWLINE', '<hr>');
// abtracts


// above we have a example of an abstratc class
abstract class Animal {
    
    private $trueOrFalse = true;
    
    public function getBool() {
        return $this->trueOrFalse;
    }
    
}

class Cachorro extends Animal {
    
}

class Gato extends Animal {
    
}

class Touro extends Animal {
    
}

// above we have an example of a absctract class
abstract class Casa {
    
    private $size = 'large';
    
    // here we define an abstract method
    // this only says that any instance of this class have to declare this method
    abstract public function getSize();
    
}

// here we extend the Casa class
class Apartamento extends Casa {
    
    // here we declare the abstract method of the parent class
    // important note: the parameters and scope have to be the same that the method originated
    public function getSize() {
        echo 'agora deu certo!';
    }
}

$house = new Apartamento;

echo $house::getSize();

echo NEWLINE;

echo $house->getSize() . '<b> + teste</b>';

// var_dump($house);


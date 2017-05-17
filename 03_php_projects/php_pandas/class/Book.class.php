<?php

class Book {
    
    // defining parameters
    var $author;
    var $date;
    var $year;
    var $editor;
    var $desc;
    var $format = 'paper';
    
    function __contruct() {
        
        $this->author = $this->toLoud('maria');
        
    }
    
    // methods to get infos from parameters
    function getAuthor() {
        return "<p><b>" . $this->author . "</b></p>";
    }
    
    function getDate() {
        return "<p><b>" . $this->date . "</b></p>";
    }
    
    function getYear() {
        return "<p><b>" . $this->year . "</b></p>";
    }
    
    function getEditor() {
        return "<p><b>" . $this->editor . "</b></p>";
    }
    
    function getDesc() {
        return "<p><b>" . $this->desc . "</b></p>";
    }
    
    function getFormat() {
        return "<p><b>" . $this->format . "</b></p>";
    }
    
    function toLoud($var) {
        return strtoupper($var);
    }
    
    /**
     *  a method that uses other methods from the classs
     */
    function getAuthorYear() {
        $a = $this->getAuthor();
        $b = $this->getYear();
        echo $a . ' + + + + ' . $b . PHP_EOL;
    }
    
    /**
     * function to loop and return the book parameters according to the class
     * 
     * @bookType refers to object created, to return their properties
     * 
     */
    function getObjParams($bookType) {
        // here we get the object params with get_object_vars function
        $params = get_object_vars($bookType);
        foreach ($params as $a) {
            echo "<pre>" . $a . "</pre>";
        }
    }
    
}
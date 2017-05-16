<?php

$newLine = "<hr>" . PHP_EOL;

require_once 'class/Book.class.php';

// working with classes
echo "<h3>working with classes</h3>";
echo $newLine;


$book = new Book;

var_dump($book);
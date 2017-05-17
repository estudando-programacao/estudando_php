<?php

require_once '../testando_composer/vendor/autoload.php';
require_once 'class/Book.class.php';
require_once 'class/Panda.class.php';
require_once 'class/Panda2.class.php';

$newLine = "<hr>" . PHP_EOL;

// working with classes
echo "<h3>working with classes</h3>";
echo $newLine;

// creating a new object on $book variable
$book = new Book;

// set the $book object parameters
$book->author = 'thierry';
$book->date = date('d/m/y');
$book->year = date('Y');
$book->editor = 'editora FANTASMA';
$book->desc = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit';

// creating a new object in $book2 variable
$book2 = new Book;

// set the $book2 object parameters
$book2->author = 'rene';
$book2->date = date('d/m/y');
$book2->year = date('Y');
$book2->editor = 'editora GOOGLE';
$book2->format = 'web';
$book2->desc = 'Lorem ipsum dolor sit am';

// debug
echo '<p>setting the values for $book:</p>'; 
r($book);

echo '<p>setting the values for $book2:</p>';
r($book2);

echo $newLine;

// print the value for the parameters set above
echo '<p>print the value for the parameters set above</p>';
echo $book->author . '<br>';
echo $book->date . '<br>';
echo $book->year . '<br>';
echo $book->editor . '<br>';

echo $newLine;

// using function to retrieve the values, after creating them in the class
echo '<p>using function to retrieve the values, after creating them in the class</p>';
echo $book->getAuthor();
echo $book->getDate();
echo $book->getYear();
echo $book->getEditor();
echo $book->getDesc();
echo $book->getFormat();

echo $newLine;

// using the method with the object and the parameter
// here we show the $book parameters
echo 'get parameters with getObjParams method for $book:';
$book->getObjParams($book);

echo $newLine;

// and here we show the $book2 params
echo 'get parameters with getObjParams method for $book2:';
$book2->getObjParams($book2);

echo $newLine;

// calling a method that uses other methods from the book class
echo 'calling a method that uses other methods from the book class';
$book->getAuthorYear();

echo $newLine;

// here we create 
$panda = new Panda;

$pandaName = $panda->loudName;

echo "<b>{$pandaName}</b><br>";

echo "a palavra a seguir tem {$panda->countLetters($pandaName)} letras.<br>";

echo $panda->loudName2;

r($panda, $pandaName);

echo $newLine;

// here we create more objects base on another classes
$panda2 = new Panda2('jose');
$panda3 = new Panda2('jesus');

echo $panda2->loudName . '<br>';
echo $panda3->loudName . '<br>';

r($panda2, $panda3);

?>
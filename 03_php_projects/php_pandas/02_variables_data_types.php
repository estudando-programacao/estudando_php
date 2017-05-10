<?php

require_once '../testando_composer/vendor/autoload.php';

// we defined a variable called $texto with some lorem text
$texto = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh euismod tincidunt ut laoreet dolore
magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
quis nostrud exerci tation ullamcorper suscipit lobortis nisl
ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
dolor in hendrerit in vulputate velit esse molestie consequat,
vel illum dolore eu feugiat nulla facilisis at vero eros et
accumsan et iusto odio dignissim qui blandit praesent luptatum
zzril delenit augue duis dolore te feugait nulla facilisi.
Nam liber tempor cum soluta nobis eleifend option congue
nihil imperdiet doming id quod mazim placerat facer possim
assum. Typi non habent claritatem insitam; est usus legentis
in iis qui facit eorum claritatem. Investigationes
demonstraverunt lectores legere me lius quod ii legunt saepius.
Claritas est etiam processus dynamicus, qui sequitur mutationem
consuetudium lectorum. Mirum est notare quam littera gothica,
quam nunc putamus parum claram, anteposuerit litterarum formas
humanitatis per seacula quarta decima et quinta decima. Eodem
modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
in futurum."; 

// here we print $texto
echo $texto;

?>

<hr>

<?php

// Assign pi to a variable.
$pi = 3.14159265359;

// Perform circumference calculations.
echo $pi * 5;
echo "<br>";
echo $pi * 3;

?>


<?php 

// data types

// numbers
$varOne = 2;
$varThree = -10;
$varFour = 2.10;
$varFive = -10.5;

// booleans
$varSix = true;
$varSeven = false;

// null
$varEight = null;

?>

<?php

// arrays

$arrayUm = [1, 2, 3];

$arrayDois = array(1, 2, 3, 4, 5);

?>

<hr>

<?php

// assignment of value

// here we assign a value to a variable, without setting it
$somandoValores = 1;
$somandoValores += 1;

echo $somandoValores;

var_dump($somandoValores);

?>

<hr>

<?php

// incremental operator

// here we increment the value setting it to the variable
$panda = 3;
$panda--;

echo $panda;

var_dump($panda++);

?>

<hr>

<?php

// $value-- - Change value *after* current line.
// --$value - Change the value on the current line.

// Set a value.
$panda = 3;

// here we sum 1000 to the actual value of $panda
$panda += 1000;

// Dump BEFORE.
var_dump($panda); // int(3)

// Dump DURING.
// the decremental before variable adds a value after the line.
var_dump($panda--); // int(2)

// here in echo, the $panda value will be 2
echo $panda;

// Dump AFTER.
var_dump($panda); // int(2)

// Dump BEFORE.
// here the decremental subtract the value from $panda before any other proccess
var_dump(--$panda);

?>









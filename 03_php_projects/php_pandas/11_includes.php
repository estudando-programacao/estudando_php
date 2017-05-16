<?php 

// require_once only load file once
require_once '../testando_composer/vendor/autoload.php';

// include don't show errors when file is not loaded
// include 'test.php';

// require shows an error when file is not located
// require 'test.php';

echo "<h3>teste include</h3>";

var_dump(require_once '../testando_composer/vendor/autoload.php');

echo "<b>" . __DIR__ . "</b>";